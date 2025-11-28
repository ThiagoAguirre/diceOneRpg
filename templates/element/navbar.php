<?php
/**
 * Simple top navigation bar shared across authenticated pages.
 *
 * @var \Authentication\IdentityInterface|null $identity
 * @var \App\View\AppView $this
 */
$homeUrl = $this->Url->build('/guildhall');
$loginUrl = $this->Url->build('/login');
$registerUrl = $this->Url->build('/register');
?>
<nav class="app-navbar" aria-label="Primary">
    <div class="app-navbar__brand">
        <a href="<?= $homeUrl ?>">RPG Quest</a>
    </div>
    <div class="app-navbar__links">
        <?php if ($identity): ?>
            <a href="<?= $homeUrl ?>">Home</a>
            <?= $this->Form->postLink(
                'Logout',
                ['controller' => 'Users', 'action' => 'logout'],
                ['class' => 'app-navbar__logout']
            ) ?>
        <?php else: ?>
            <a href="<?= $loginUrl ?>">Login</a>
            <a href="<?= $registerUrl ?>" class="highlight">Register</a>
        <?php endif; ?>
    </div>
</nav>
