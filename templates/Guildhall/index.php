<header class="container page-header">
  <h1>Bem-vindo ao <span>Guildhall</span>, Aventureiro</h1>
  <p class="subtitle">Sua base de operações para todas as aventuras épicas</p>
</header>

<main class="container main-grid">
  <!-- Stats -->
  <section class="stats">
    <article class="stat-card">
      <div class="stat-icon crown" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crown w-6 h-6 text-primary-foreground" data-lov-id="src/pages/Guildhall.tsx:67:18" data-lov-name="stat.icon" data-component-path="src/pages/Guildhall.tsx" data-component-line="67" data-component-file="Guildhall.tsx" data-component-name="stat.icon" data-component-content="%7B%22className%22%3A%22w-6%20h-6%20text-primary-foreground%22%7D"><path d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z"></path><path d="M5 21h14"></path></svg>
      </div>
      <div class="stat-number">3</div>
      <div class="stat-label">Campanhas Ativas</div>
    </article>
    <article class="stat-card">
      <div class="stat-icon calendar" aria-hidden="true">
        <?= $this->Html->image('calendar.svg', ['alt' => 'Calendar', 'class' => 'lucide lucide-calendar w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?>
      </div>
      <div class="stat-number">5</div>
      <div class="stat-label">Sessões Esta Semana</div>
    </article>
    <article class="stat-card">
      <div class="stat-icon shield" aria-hidden="true">
        <?= $this->Html->image('shield.svg', ['alt' => 'Shield', 'class' => 'lucide lucide-shield w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?>
      </div>
      <div class="stat-number">12</div>
      <div class="stat-label">Nível de Mestre</div>
    </article>
    <article class="stat-card">
      <div class="stat-icon friends" aria-hidden="true">
        <?= $this->Html->image('users.svg', ['alt' => 'Users', 'class' => 'lucide lucide-friends w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?>
      </div>
      <div class="stat-number">8</div>
      <div class="stat-label">Amigos Online</div>
    </article>
  </section>

  <!-- Comunidade -->
  <section class="panel community">
    <header class="panel-header">
      <div>
        <?= $this->Html->image('user-round-search.svg', ['alt' => 'Users', 'class' => 'lucide lucide-friends w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?>
      </div>
      <h2>Comunidade</h2>
    </header>
    <p class="panel-desc">
      Conecte-se com outros aventureiros, compartilhe experiências e aprenda com a comunidade.
    </p>
    <div class="feature-grid">
      <div class="feature-card" aria-label="Blog">
        <div>
          <?= $this->Html->image('book-open-yellow.svg', ['alt' => 'Book', 'class' => 'lucide lucide-book w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?>
        </div>
        <strong>Blog</strong>
        <span>Compartilhe suas aventuras</span>
      </div>
      <div class="feature-card" aria-label="Wiki">
        <div>
          <?= $this->Html->image('message-circle-yellow.svg', ['alt' => 'Wiki', 'class' => 'lucide lucide-wiki w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?>
        </div>
        <strong>Wiki</strong>
        <span>Conhecimento colaborativo</span>
      </div>
      <div class="feature-card" aria-label="Fóruns">
        <div> 
          <?= $this->Html->image('radical-yellow.svg', ['alt' => 'Forum', 'class' => 'lucide lucide-forum w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?>
        </div>
        <strong>Fóruns</strong>
        <span>Discussões ativas</span>
      </div>
    </div>

    <?= $this->Html->link('Explorar Comunidade <span class="arrow">›</span>', '#comunidade', ['escape' => false, 'class' => 'btn primary wide']) ?>
  </section>

  <!-- Atividade Recente -->
  <aside class="panel activity">
    <header class="panel-header">
      <h2>Atividade Recente</h2>
    </header>

    <ul class="activity-list">
      <li>
        <h3>Sessão: A Coroa Perdida</h3>
        <time>2 horas atrás</time>
        <p>Vocês encontraram a entrada secreta!</p>
      </li>
      <li>
        <h3>Nova campanha criada</h3>
        <time>1 dia atrás</time>
        <p>Sombras de Barovia está pronta para jogadores</p>
      </li>
      <li>
        <h3>Post no blog curtido</h3>
        <time>2 dias atrás</time>
        <p>Sua resenha sobre D&amp;D 5e recebeu 15 curtidas</p>
      </li>
    </ul>
  </aside>

  <!-- Ferramentas -->
  <section class="panel tools">
    <header class="panel-header">
    <div>
        <?= $this->Html->image('user-cog.svg', ['alt' => 'Sparkles', 'class' => 'lucide lucide-sparkles w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?>
      </div>
      <h2>Ferramentas</h2>
    </header>
    <p class="panel-desc">Acesse ferramentas avançadas para elevar suas campanhas ao próximo nível.</p>

    <div class="feature-grid tools-grid">
      <div class="feature-card">
        <div ><?= $this->Html->image('book-open-yellow.svg', ['alt' => 'Fichas Digitais', 'class' => 'lucide lucide-book w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?></div>
        <strong>Fichas Digitais</strong>
        <span>Crie e gerencie personagens</span>
      </div>
      <div class="feature-card">
        <div ><?= $this->Html->image('map-yellow.svg', ['alt' => 'Mapas Interativos', 'class' => 'lucide lucide-map-shield w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?></div>
        <strong>Mapas Interativos</strong>
        <span>Visualize e navegue mundos</span>
      </div>
      <div class="feature-card">
        <div ><?= $this->Html->image('dices-yellow.svg', ['alt' => 'Dados Virtuais', 'class' => 'lucide lucide-gamepad w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?></div>
        <strong>Dados Virtuais</strong>
        <span>Sistema de rolagem avançado</span>
      </div>
      <div class="feature-card">
        <div ><?= $this->Html->image('crown-yellow.svg', ['alt' => 'Gerenciador de Campanha', 'class' => 'lucide lucide-crown w-6 h-6 text-primary-foreground', 'width' => 24, 'height' => 24]) ?></div>
        <strong>Gerenciador de Campanha</strong>
        <span>Organize suas aventuras</span>
      </div></div>

    <?= $this->Html->link('Acessar Ferramentas <span class="arrow">›</span>', '#ferramentas', ['escape' => false, 'class' => 'btn primary wide']) ?>
  </section>

  <!-- Ações rápidas -->
  <aside class="panel quick">
    <header class="panel-header">
      <h2>Ações Rápidas</h2>
    </header>
    <nav class="quick-actions">
  <div role="button" tabindex="0" class="btn primary block"><?php echo $this->Html->image('layout-dashboard.svg', ['alt' => 'Dashboard', 'class' => 'icon', 'width' => 20, 'height' => 20]); ?> Meu Dashboard</div>
  <div role="button" tabindex="0" class="btn primary block"><span class="icon plus"></span> Nova Campanha</div>
  <div role="button" tabindex="0" class="btn primary block"><?php echo $this->Html->image('user-plus.svg', ['alt' => 'Novo Personagem', 'class' => 'icon', 'width' => 20, 'height' => 20]); ?> Novo Personagem</div></nav>
  </aside>

  <!-- Sessões -->
  <section class="panel sessions">
    <header class="panel-header">
      <?= $this->Html->image('gamepad.svg', ['alt' => 'Gamepad', 'class' => 'panel-icon gamepad', 'width' => 24, 'height' => 24]) ?>
      <h2>Sessões (Games)</h2>
    </header>
    <p class="panel-desc">
      Gerencie suas sessões ativas, crie novas aventuras ou participe de campanhas existentes.
    </p>

    <div class="session-row">
      <div>
        <strong>Criar Nova Sessão</strong>
      <span class="muted">Como Mestre</span>
      </div>
      <?= $this->Html->link($this->Html->image('search.svg', ['alt' => 'Buscar', 'class' => 'icon', 'width' => 20, 'height' => 20]) . ' Criar', '#criar', ['escape' => false, 'class' => 'btn primary']) ?>
    </div>

    <div class="session-row">
      <div>
        <strong>Procurar Sessões</strong>
        <span class="muted">Como Jogador</span>
      </div>
      <?= $this->Html->link($this->Html->image('search.svg', ['alt' => 'Buscar', 'class' => 'icon', 'width' => 20, 'height' => 20]) . ' Procurar', '#procurar', ['escape' => false, 'class' => 'btn primary']) ?>
    </div>

    <?= $this->Html->link('Ver Todas as Sessões <span class="arrow">›</span>', '#todas', ['escape' => false, 'class' => 'btn cta wide']) ?>
  </section>
</main>

<?= $this->Html->css('guildhall.css') ?>