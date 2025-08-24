<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RPG Quest</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: #0d0f2b;
      color: #fff;
    }
    header {
      background: #0a0c23;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      color: #f5b200;
    }
    header nav a {
      margin: 0 1rem;
      color: #ccc;
      text-decoration: none;
    }
    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 4rem 2rem;
      background: linear-gradient(to right, #0d0f2b 60%, #5e4d21);
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 900;
      color: #f5b200;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.2rem;
      color: #b0c4de;
    }
    .buttons {
      margin-top: 2rem;
    }
    .buttons a {
      padding: 0.75rem 1.5rem;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      margin-right: 1rem;
    }
    .start-btn {
      background: #f5b200;
      color: #000;
    }
    .explore-btn {
      background: #7a3ff2;
      color: #fff;
    }
    .stats, .features, .campaigns, .blog, footer {
      padding: 3rem 2rem;
      text-align: center;
    }
    .stats div, .features .item, .campaigns .card, .blog .card {
      display: inline-block;
      margin: 1rem;
      padding: 1rem;
      background: #14162f;
      border-radius: 12px;
      max-width: 250px;
    }
    .features .item h3 {
      color: #f5b200;
    }
    .campaigns .card h4, .blog .card h4 {
      color: #f5b200;
    }
    .campaigns .card button {
      margin-top: 1rem;
      background: #f5b200;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      font-weight: bold;
    }
    footer {
      background: #0a0c23;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      color: #8899a8;
    }
    footer div {
      margin: 1rem;
    }
    footer h4 {
      color: #f5b200;
    }
  </style>
</head>
<body>
  <header>
    <div><strong>RPG Quest</strong></div>
    <nav>
      <a href="#inicio">Início</a>
      <a href="#campanhas">Campanhas</a>
      <a href="#dashboard">Dashboard</a>
      <a href="#blog">Blog</a>
      <a href="#login">Login</a>
      <a href="#registrar" style="background: #f5b200; padding: 0.5rem 1rem; border-radius: 8px; color: black;">Registrar</a>
    </nav>
  </header>
  <section class="hero">
    <div>
      <h1>Crie, Explore<br>Viva aventuras <br>Épicas de RPG</h1>
      <p>Embarque em jornadas, desvende mistérios e encontre histórias épicas para participar. A maior plataforma de RPG online do Brasil.</p>
      <div class="buttons">
        <a href="#" class="start-btn">Começar Aventura</a>
        <a href="#" class="explore-btn">Explorar Campanhas</a>
      </div>
    </div>
  </section>
  <section class="stats">
    <div><strong>2.5K+</strong><br>Jogadores Ativos</div>
    <div><strong>450+</strong><br>Campanhas Ativas</div>
    <div><strong>89%</strong><br>Satisfação</div>
    <div><strong>24/7</strong><br>Suporte Online</div>
  </section>
  <section class="features">
    <h2>Por que escolher o RPG Quest?</h2>
    <div class="item">
      <h3>Comunidade Ativa</h3>
      <p>Conecte-se com milhares de jogadores apaixonados por RPG. Encontre seu grupo ideal.</p>
    </div>
    <div class="item">
      <h3>Ferramentas Avançadas</h3>
      <p>Mapas interativos, fichas digitais e muito mais para suas sessões.</p>
    </div>
    <div class="item">
      <h3>Acessível em Qualquer Lugar</h3>
      <p>Funciona em PC, tablet e celular, a qualquer hora.</p>
    </div>
  </section>
  <section class="campaigns">
    <h2>Campanhas em Destaque</h2>
    <div class="card">
      <h4>A Lenda do Dragão Adormecido</h4>
      <p>Aventura épica em busca de um tesouro perdido. <br> D&D 5e</p>
      <button>Participar da Aventura</button>
    </div>
    <div class="card">
      <h4>Mistérios de Shadowhaven</h4>
      <p>Investigação sobrenatural numa cidade assombrada. <br> Call of Cthulhu</p>
      <button>Participar da Aventura</button>
    </div>
  </section>
  <section class="blog">
    <h2>Últimas do Blog</h2>
    <div class="card">
      <h4>10 Dicas para Mestres Iniciantes</h4>
      <p>Dicas essenciais para criar sessões memoráveis.</p>
    </div>
    <div class="card">
      <h4>Como Criar Personagens Memoráveis</h4>
      <p>Técnicas para dar vida a NPCs inesquecíveis.</p>
    </div>
    <div class="card">
      <h4>O Futuro dos RPGs Online</h4>
      <p>Tendências e tecnologia no RPG digital.</p>
    </div>
  </section>
  <footer>
    <div>
      <h4>RPG Quest</h4>
      <p>A plataforma definitiva para campanhas online de RPG. Conecte-se, crie e viva histórias épicas.</p>
    </div>
    <div>
      <h4>Links Rápidos</h4>
      <p>Campanhas<br>Dashboard<br>Blog<br>Suporte</p>
    </div>
    <div>
      <h4>Recursos</h4>
      <p>Como Jogar<br>Regras<br>Comunidade<br>FAQ</p>
    </div>
  </footer>
</body>
</html>
