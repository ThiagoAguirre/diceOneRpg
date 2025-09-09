<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Guildhall> $guildhalls
 */
?>

<!-- Hero Section -->
<section class="hero">
  <div class="overlay"></div>
  <div class="hero-content animate-fade">
    <h1>⚔️ Guildas & Alianças</h1>
    <p>
      Junte-se a uma guilda poderosa ou crie a sua própria. 
      Forme alianças épicas e conquiste territórios junto aos seus companheiros de aventura.
    </p>
    <div class="hero-buttons">
      <?= $this->Html->link('🏰 Criar Guilda', ['action' => 'add'], ['class' => 'btn-primary']) ?>
      <?= $this->Html->link('🔍 Explorar Todas', '#guildhalls-list', ['class' => 'btn-secondary']) ?>
    </div>
  </div>
</section>

<!-- Guild Stats -->
<section class="features">
  <h2>Sistema de Guildas</h2>
  <p>Conecte-se, cresça e domine os reinos virtuais</p>
  <div class="cards">
    <div class="card animate-up">
      <span>👥</span>
      <h3>Comunidade Unida</h3>
      <p>Forme laços duradouros com aventureiros que compartilham suas paixões e objetivos.</p>
    </div>
    <div class="card animate-up">
      <span>⚔️</span>
      <h3>Batalhas Épicas</h3>
      <p>Participe de batalhas coordenadas e eventos exclusivos para membros de guildas.</p>
    </div>
    <div class="card animate-up">
      <span>🏆</span>
      <h3>Ranking & Recompensas</h3>
      <p>Compete no ranking de guildas e desbloqueie recompensas exclusivas para sua aliança.</p>
    </div>
  </div>
</section>

<!-- Available Guildhalls -->
<section class="campaigns" id="guildhalls-list">
  <h2>Guildas Disponíveis</h2>
  <p>Encontre a guilda perfeita para sua jornada épica</p>
  
  <?php if ($guildhalls->count() > 0): ?>
    <div class="campaign-list">
      <?php foreach ($guildhalls as $guildhall): ?>
        <div class="campaign animate-scale">
          <h3>
            🏰 <?= h($guildhall->name) ?>
            <span class="tag">Ativa</span>
          </h3>
          <p><?= h($guildhall->description) ?: 'Uma guilda misteriosa aguarda novos membros corajosos...' ?></p>
          <p><b>Líder:</b> Guild Master</p>
          <p><b>Membros:</b> <?= rand(1, 50) ?>/50</p>
          <p><b>Nível:</b> <?= rand(1, 100) ?></p>
          <p><b>Status:</b> Ativa</p>
          
          <div class="guild-actions">
            <?= $this->Html->link('📋 Ver Detalhes', ['action' => 'view', $guildhall->id], ['class' => 'btn-secondary']) ?>
            <?= $this->Html->link('⚔️ Juntar-se', '#', ['class' => 'btn-primary']) ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="empty-state">
      <h3>🏰 Nenhuma Guilda Encontrada</h3>
      <p>Seja o primeiro a criar uma guilda épica!</p>
      <?= $this->Html->link('🏰 Criar Primeira Guilda', ['action' => 'add'], ['class' => 'btn-primary']) ?>
    </div>
  <?php endif; ?>
  
  <!-- Pagination -->
  <?= $this->element('paginator') ?>
</section>

<!-- Call to Action -->
<section class="cta">
  <h2>Pronto Para Liderar?</h2>
  <p>Crie sua própria guilda e torne-se uma lenda entre os aventureiros!</p>
  <?= $this->Html->link('👑 Fundar Minha Guilda', ['action' => 'add'], ['class' => 'btn-secondary']) ?>
</section>

<?php 
  echo $this->Html->css('home.css');
  echo $this->Html->css('guildhall.css');
  echo $this->Html->script('home.js');
?>