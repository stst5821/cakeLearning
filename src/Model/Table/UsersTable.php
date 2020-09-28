<?php
namespace App\Model\Table;
 
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
 
        $this->setTable('adminusers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
 
        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('mail', 'A username is required')
            ->notEmpty('password', 'A password is required');
    }
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['mail']));
 
        return $rules;
    }
}