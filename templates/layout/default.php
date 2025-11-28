<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @var \App\View\AppView $this
 */

$cakeDescription = 'OneDiceRPG';
$identity = $this->request->getAttribute('identity');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= h($cakeDescription) ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['cake']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->element('navbar', ['identity' => $identity]) ?>
    <main class="app-main">
        <div class="app-container">
            <div class="flash-wrapper">
                <?= $this->Flash->render() ?>
            </div>
            <?= $this->fetch('content') ?>
        </div>
    </main>
</body>
</html>
