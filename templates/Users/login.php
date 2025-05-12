<?php $this->assign('title', 'Login'); ?>

<div class="login-container">
    <!-- Left section for the image -->
    <div class="login-image">
        <?= $this->Html->image('login/Background.png', ['alt' => 'Logo', 'class' => 'logo']); ?>
    </div>

    <!-- Right section for the form -->
    <div class="login-form">
        <div class="users form">
            <h3>Login</h3>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Please enter your username and password') ?></legend>
                <?= $this->Form->control('email', ['required' => true]) ?>
                <?= $this->Form->control('password', ['required' => true]) ?>
            </fieldset>
            <?= $this->Form->submit(__('Login')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?php 
echo $this->HTML->css(['login.css']);
?>