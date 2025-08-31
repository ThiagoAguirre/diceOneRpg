<a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>">Login</a>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RPG Quest</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">
      <span>🗡️ RPG Quest</span>
    </div>
    <nav>
      <a href="#" class="active">Início</a>
      <a href="#">Campanhas</a>
      <a href="#">Comunidade</a>
      <a href="#">Blog</a>
    </nav>
    <div class="actions">
      <button class="btn-login">Entrar</button>
      <button class="btn-register">Registrar</button>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-content animate-fade">
      <h1>RPG Quest</h1>
      <p>Sua jornada épica começa aqui. Conecte-se com aventureiros, crie campanhas lendárias e explore mundos fantásticos.</p>
      <div class="hero-buttons">
        <button class="btn-primary">🗡️ Começar Aventura</button>
        <button class="btn-secondary">👑 Explorar Campanhas</button>
      </div>
    </div>
  </section>

  <!-- Por que RPG Quest -->
  <section class="features">
    <h2>Por Que RPG Quest?</h2>
    <p>A plataforma mais completa para suas aventuras de RPG online</p>
    <div class="cards">
      <div class="card animate-up">
        <span>👥</span>
        <h3>Comunidade Ativa</h3>
        <p>Conecte-se com milhares de jogadores apaixonados por RPG ao redor do mundo.</p>
      </div>
      <div class="card animate-up">
        <span>⚡</span>
        <h3>Ferramentas Avançadas</h3>
        <p>Sistema completo de fichas, mapas interativos e dados virtuais.</p>
      </div>
      <div class="card animate-up">
        <span>🌍</span>
        <h3>Acessível em Qualquer Lugar</h3>
        <p>Jogue de qualquer dispositivo, a qualquer hora, em qualquer lugar.</p>
      </div>
    </div>
  </section>

  <!-- Campanhas -->
  <section class="campaigns">
    <h2>Campanhas em Destaque</h2>
    <p>Aventuras épicas esperando por heróis corajosos</p>
    <div class="campaign-list">
      <div class="campaign animate-scale">
        <h3>A Coroa Perdida <span class="tag">D&D 5e</span></h3>
        <p>Uma aventura épica em busca da coroa ancestral do reino perdido.</p>
        <p><b>Mestre:</b> Mestre Aldric</p>
        <p><b>Jogadores:</b> 4/6</p>
        <p><b>Nível:</b> 1-5</p>
        <button class="btn-primary">Participar</button>
      </div>
      <div class="campaign animate-scale">
        <h3>Sombras de Barovia <span class="tag">D&D 5e</span></h3>
        <p>Horror gótico nas terras sombrias de Ravenloft.</p>
        <p><b>Mestre:</b> Mestra Raven</p>
        <p><b>Jogadores:</b> 5/6</p>
        <p><b>Nível:</b> 3-10</p>
        <button class="btn-primary">Participar</button>
      </div>
      <div class="campaign animate-scale">
        <h3>Piratas dos Mares do Sul <span class="tag">Pathfinder</span></h3>
        <p>Aventuras marítimas em busca de tesouros lendários.</p>
        <p><b>Mestre:</b> Capitão Drake</p>
        <p><b>Jogadores:</b> 3/5</p>
        <p><b>Nível:</b> 5-12</p>
        <button class="btn-primary">Participar</button>
      </div>
    </div>
  </section>

  <!-- Blog -->
  <section class="blog">
    <h2>Últimas do Blog</h2>
    <p>Dicas, guias e novidades do mundo RPG</p>
    <div class="blog-list">
      <div class="blog-post animate-up">
        <h3>Como Criar Sua Primeira Campanha</h3>
        <p>Dicas essenciais para mestres iniciantes começarem suas aventuras...</p>
        <span>Por Mestre Gandalf • 2 dias atrás</span>
      </div>
      <div class="blog-post animate-up">
        <h3>Guia de Classes para Iniciantes</h3>
        <p>Descubra qual classe combina melhor com seu estilo de jogo...</p>
        <span>Por Aventureira Luna • 1 semana atrás</span>
      </div>
      <div class="blog-post animate-up">
        <h3>RPG Online vs Presencial</h3>
        <p>Explorando as vantagens e desafios de cada modalidade...</p>
        <span>Por Veterano Thorin • 2 semanas atrás</span>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta">
    <h2>Pronto Para Sua Próxima Aventura?</h2>
    <p>Junte-se a milhares de aventureiros e comece sua jornada épica hoje mesmo!</p>
    <button class="btn-secondary">⚔️ Criar Conta Grátis</button>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-logo">
        🗡️ RPG Quest
        <p>A plataforma definitiva para aventuras de RPG online.</p>
      </div>
      <div>
        <h4>Links Rápidos</h4>
        <ul>
          <li>Campanhas</li>
          <li>Comunidade</li>
          <li>Blog</li>
          <li>Ajuda</li>
        </ul>
      </div>
      <div>
        <h4>Recursos</h4>
        <ul>
          <li>Sistema de Níveis</li>
          <li>Wiki Colaborativa</li>
          <li>Ferramentas Avançadas</li>
          <li>Matchmaking</li>
        </ul>
      </div>
      <div>
        <h4>Suporte</h4>
        <ul>
          <li>Contato</li>
          <li>FAQ</li>
          <li>Privacidade</li>
          <li>Termos de Uso</li>
        </ul>
      </div>
    </div>
    <p class="footer-copy">© 2024 RPG Quest. Que sua jornada seja épica!</p>
  </footer>

</body>
</html>

<?php 
  echo $this->Html->css('home.css');
  echo $this->Html->script('home.js');
?>