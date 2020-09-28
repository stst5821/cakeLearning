<?php

namespace App\Controller\admin;

use Cake\Controller\Controller;
use Cake\Event\Event;


class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();
 
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
 
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'authenticate' => [
                'Form' => [
                'userModel' => 'Users',
                'fields' => [
                    'username' => 'mail',
                    'password' => 'password'
                ]
                ]
            ],
        ]);
        $this->Auth->allow(['login','add']);
    }
}