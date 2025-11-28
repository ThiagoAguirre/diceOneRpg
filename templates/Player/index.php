<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\ResultSetInterface|\Cake\Collection\CollectionInterface $publicCampaigns
 * @var array<int, int> $playerCounts
 */

use Cake\Utility\Text;

$this->assign('title', 'Player Hall');
$this->start('css');
?>
<style>
    body {
        background: #050608;
        color: #f4f4f4;
        font-family: 'Inter', system-ui, sans-serif;
    }

    .app-main .app-container {
        max-width: 1100px;
        padding: 3rem 1.5rem 4rem;
    }

    .player-grid {
        display: grid;
        grid-template-columns: minmax(280px, 360px) 1fr;
        gap: 2.5rem;
    }

    @media (max-width: 960px) {
        .player-grid {
            grid-template-columns: 1fr;
        }
    }

    .panel {
        background: rgba(14, 16, 22, 0.95);
        border-radius: 28px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 2rem;
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.55);
    }

    .panel h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        margin-bottom: 0.4rem;
    }

    .panel p {
        color: #a8afc7;
        margin-bottom: 1.5rem;
    }

    .join-form label {
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.08em;
        color: #cdd2e6;
        display: block;
        margin-bottom: 0.75rem;
    }

    .join-form input[type="password"] {
        width: 100%;
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        background: rgba(6, 8, 12, 0.9);
        padding: 0.9rem 1.1rem;
        color: #fff;
        font-size: 1rem;
        margin-bottom: 1rem;
    }

    .join-form button {
        width: 100%;
        border: none;
        border-radius: 14px;
        padding: 0.95rem 1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        background: linear-gradient(135deg, #e63946, #a4161a);
        color: #fff;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .join-form button:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 24px rgba(230, 57, 70, 0.35);
    }

    .campaign-list {
        display: grid;
        gap: 1.5rem;
    }

    .campaign-card {
        background: rgba(8, 9, 14, 0.95);
        border-radius: 24px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        overflow: hidden;
        display: grid;
        grid-template-columns: 220px 1fr;
        min-height: 220px;
    }

    @media (max-width: 720px) {
        .campaign-card {
            grid-template-columns: 1fr;
        }
    }

    .campaign-media {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #1f1f2b, #0a0b10);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #8f96ac;
        font-size: 0.9rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .campaign-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .campaign-fallback {
        padding: 1rem;
        text-align: center;
    }

    .campaign-body {
        padding: 1.5rem 1.75rem;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .campaign-body h3 {
        font-size: 1.4rem;
        margin: 0;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        padding: 0.25rem 0.75rem;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 0.85rem;
        color: #f8c900;
    }

    .campaign-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 1.2rem;
        font-size: 0.9rem;
        color: #a8afc7;
    }

    .join-btn {
        align-self: flex-start;
        margin-top: auto;
        border: none;
        border-radius: 12px;
        padding: 0.85rem 1.75rem;
        background: rgba(230, 57, 70, 0.9);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.2s ease;
    }

    .join-btn:hover {
        background: #ff4f5c;
    }

    .empty-state {
        text-align: center;
        opacity: 0.7;
        padding: 2rem 1rem;
        border: 1px dashed rgba(255, 255, 255, 0.2);
        border-radius: 20px;
    }
</style>
<?php $this->end(); ?>

<section class="player-grid">
    <div class="panel">
        <h2>Join Private Campaign</h2>
        <p>Acesse mesas secretas usando o c&oacute;digo compartilhado pelo mestre.</p>

        <?= $this->Form->create(null, ['class' => 'join-form']) ?>
            <?= $this->Form->hidden('form_context', ['value' => 'join-private']) ?>
            <label for="private-password">Access Code</label>
            <input type="password" name="password" id="private-password" placeholder="Ex: obsidian-sigil" required>
            <button type="submit">Unlock</button>
        <?= $this->Form->end() ?>
    </div>

    <div class="panel">
        <h2>Explore Public Campaigns</h2>
        <p>Descubra mesas abertas prontas para receber novos her&oacute;is.</p>

        <?php if (count($publicCampaigns) === 0): ?>
            <div class="empty-state">
                Nenhuma campanha p&uacute;blica dispon&iacute;vel no momento. Tente novamente mais tarde!
            </div>
        <?php else: ?>
            <div class="campaign-list">
                <?php foreach ($publicCampaigns as $campaign): ?>
                    <?php
                        $currentPlayers = $playerCounts[$campaign->id] ?? 0;
                        $availableSlots = max(0, (int)$campaign->max_players - $currentPlayers);
                    ?>
                    <article class="campaign-card">
                        <div class="campaign-media">
                            <?php if ($campaign->image): ?>
                                <img src="<?= $this->Url->assetUrl($campaign->image) ?>" alt="Imagem da campanha <?= h($campaign->name) ?>">
                            <?php else: ?>
                                <div class="campaign-fallback">Arte pendente</div>
                            <?php endif; ?>
                        </div>
                        <div class="campaign-body">
                            <span class="badge"><?= h($campaign->system ?: 'Custom') ?></span>
                            <h3><?= h($campaign->name) ?></h3>
                            <p><?= h(Text::truncate((string)$campaign->description, 140, ['ellipsis' => '...', 'exact' => false])) ?></p>
                            <div class="campaign-meta">
                                <span><?= $currentPlayers ?> jogadores</span>
                                <span><?= $availableSlots ?> vagas dispon&iacute;veis</span>
                                <?php if ($campaign->start_date): ?>
                                    <span>In&iacute;cio: <?= $campaign->start_date->format('d/m/Y') ?></span>
                                <?php endif; ?>
                            </div>
                            <button type="button" class="join-btn">Join</button>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
