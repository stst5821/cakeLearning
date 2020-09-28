<?php $this->setLayout(false) ?>
<!DOCTYPE html>
<html lang="ja">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>サンプル管理画面</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="/webroot/admin/css/common.css">

<div class="form-wrapper">

    <h1>Sign In</h1>

    <?= $this->Form->create() ?>
    <div class="form-item">
        <?= $this->Flash->render() ?>
        <label for="email"></label>
        <?= $this->Form->control('mail') ?>
    </div>
    <div class="form-item">
        <label for="password"></label>
        <?= $this->Form->control('password') ?>
    </div>
    <div class="button-panel">
        <?= $this->Form->button(__('Submit'),["class" => "button"]) ?>
        <!-- <input type="submit" class="button" title="Sign In" value="Sign In"></input> -->

    </div>
    <?= $this->Form->end() ?>
    <div class="form-footer">
    </div>
</div>

</body>

</html>