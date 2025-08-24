<?php $this->assign('title', 'Login'); ?>

<div class="login-container">
    <!-- Left section for the image -->
    <div class="login-image">
        <?= $this->Html->image('login/Background.png', ['alt' => 'Logo', 'class' => 'logo']); ?>
    </div>

    <!-- Right section for the form -->
    <div class="login-form">
        <div class="users form">
            <h3><?= __('Login') ?></h3>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Please enter your username and password') ?></legend>
                <?= $this->Form->control('email', ['required' => true, 'label' => __('Email Address')]) ?>
                <?= $this->Form->control('password', ['required' => true, 'label' => __('Password')]) ?>
                <?= $this->Form->control('remember_me', ['type' => 'checkbox', 'label' => __('Remember me (7 days)')]) ?>
            </fieldset>
            <?= $this->Form->submit(__('Login'), ['class' => 'button']); ?>
            <?= $this->Form->end() ?>

            <div class="additional-links">
                <?= $this->Html->link(__('I forgot my password!'), ['action' => 'register'], ['class' => 'register-link']) ?>
            </div>
        </div>
    </div>
</div>

<?php 
echo $this->HTML->css(['login.css']);
?>