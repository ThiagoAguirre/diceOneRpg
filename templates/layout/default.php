<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'OneDiceRPG';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php if ($this->request->getParam('controller') !== 'Users' || $this->request->getParam('action') !== 'login' || $this->request->getParam('action') !== 'register' ): ?>
        <nav class="top-nav">
            <div class="nav-left">
                <img src="/img/cake-logo.png" alt="Logo" class="nav-logo" style="width:40px; height:40px; vertical-align:middle;">
                <span class="nav-title" style="font-size:1.7em; color:#e15b5b; margin-left:10px; vertical-align:middle;">RPG Quest</span>
            </div>
            <div class="nav-center">
                <a href="/" class="nav-link active">Início</a>
                <a href="/campanhas" class="nav-link">Campanhas</a>
                <a href="/comunidade" class="nav-link">Comunidade</a>
                <a href="/blog" class="nav-link">Blog</a>
            </div>
            <div class="nav-right">
                <a href="/login" class="nav-btn">Entrar</a>
                <a href="/register" class="nav-btn nav-btn-primary">Registrar</a>
            </div>
        </nav>
    <?php endif; ?>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
