<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->control('mail') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Html->link(__('Login'), ['action' => 'login']) ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>