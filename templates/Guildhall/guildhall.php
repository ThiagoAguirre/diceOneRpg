<?php
$this->assign('title', 'Guildhall');
$this->start('css');
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&display=swap');

    body {
        background: radial-gradient(circle at top, #1c1f2b, #050608 60%);
        color: #f1f1f1;
        font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    .app-main .app-container {
        max-width: none;
        padding: 2rem;
    }

    .guildhall-screen {
        min-height: calc(100vh - 4rem);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .guildhall-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(2.8rem, 5vw, 4rem);
        margin-bottom: 0.25rem;
        text-shadow: 0 10px 30px rgba(0, 0, 0, 0.75);
    }

    .guildhall-subtitle {
        font-size: 1.1rem;
        letter-spacing: 0.05em;
        color: #c0c4d6;
        margin-bottom: 3rem;
    }

    .role-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 2rem;
        width: min(960px, 100%);
    }

    .role-card {
        background: rgba(16, 17, 22, 0.95);
        border-radius: 28px;
        padding: 2.5rem 2rem;
        border: 1px solid rgba(255, 255, 255, 0.03);
        text-decoration: none;
        color: inherit;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
        box-shadow:
            0 15px 40px rgba(0, 0, 0, 0.65),
            inset 0 0 0 1px rgba(255, 255, 255, 0.02);
        transition: transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
    }

    .role-card:hover {
        transform: translateY(-12px) scale(1.02);
        border-color: rgba(230, 57, 70, 0.7);
        box-shadow:
            0 30px 60px rgba(0, 0, 0, 0.75),
            0 0 30px rgba(230, 57, 70, 0.2);
    }

    .role-card svg {
        width: 72px;
        height: 72px;
    }

    .role-label {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        letter-spacing: 0.08em;
    }

    .role-description {
        color: #9aa0b5;
        font-size: 0.95rem;
        max-width: 320px;
    }
</style>
<?php $this->end(); ?>

<section class="guildhall-screen" aria-labelledby="guildhall-heading">
    <header>
        <h1 class="guildhall-title" id="guildhall-heading">Bem-vindo, aventureiro!</h1>
        <p class="guildhall-subtitle">Escolha como deseja iniciar sua jornada &eacute;pica.</p>
    </header>

    <div class="role-grid" role="list">
        <a class="role-card" role="listitem" href="<?= $this->Url->build(['controller' => 'Master', 'action' => 'index']); ?>" aria-label="Acessar como Master">
            <svg viewBox="0 0 64 64" fill="none" stroke="#e63946" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M10 26l7 13 15-15 15 15 7-13-10-15-12 12-12-12-10 15z"/>
                <path d="M16 44h32"/>
            </svg>
            <span class="role-label">Master</span>
            <p class="role-description">Crie, comande e d&ecirc; vida &agrave;s suas campanhas &eacute;picas dentro do Guildhall.</p>
        </a>

        <a class="role-card" role="listitem" href="<?= $this->Url->build(['controller' => 'Player', 'action' => 'index']); ?>" aria-label="Acessar como Player">
            <svg viewBox="0 0 64 64" fill="none" stroke="#e63946" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M18 44l28-28"/>
                <path d="M26 16l-8-8-6 6 8 8"/>
                <path d="M46 48l8 8 6-6-8-8"/>
                <path d="M38 20l15 2 2 15"/>
                <path d="M26 44l-15-2-2-15"/>
            </svg>
            <span class="role-label">Player</span>
            <p class="role-description">Explore campanhas abertas, descubra novos mundos e entre em aventuras lend&aacute;rias.</p>
        </a>
    </div>
</section>
