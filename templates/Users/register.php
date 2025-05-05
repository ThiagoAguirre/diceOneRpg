<h1>Register</h1>

<?= $this->Form->create($user) ?>
<fieldset>
    <legend><?= __('Please enter your details') ?></legend>
    <?= $this->Form->control('username', ['label' => 'Username']) ?>
    <?= $this->Form->control('email', [
        'label' => 'E-mail',
        'type' => 'email',
        'required' => true
    ]) ?>
    <?= $this->Form->control('password', [
        'label' => 'Password',
        'type' => 'password',
        'required' => true
    ]) ?>
</fieldset>

<?= $this->Form->button(__('Register')) ?>
<?= $this->Form->end() ?>
