<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campaign $campaign
 */
$this->assign('title', 'Master Control');
$this->start('css');
?>
<style>
    body {
        background: #07070b;
        color: #f5f5f5;
        font-family: 'Inter', system-ui, sans-serif;
    }

    .app-main .app-container {
        max-width: 960px;
        padding: 3rem 1.5rem;
    }

    .master-wrapper {
        background: linear-gradient(135deg, rgba(16, 18, 24, 0.98), rgba(10, 12, 18, 0.98));
        border-radius: 32px;
        padding: 3rem;
        box-shadow: 0 35px 60px rgba(0, 0, 0, 0.55);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .master-wrapper h1 {
        font-family: 'Playfair Display', serif;
        font-size: 2.4rem;
        margin-bottom: 0.5rem;
    }

    .master-wrapper p {
        color: #b9bfd3;
        margin-bottom: 2.5rem;
    }

    .campaign-form .form-group {
        margin-bottom: 1.25rem;
    }

    .campaign-form label {
        display: block;
        font-weight: 600;
        margin-bottom: 0.5rem;
        letter-spacing: 0.05em;
        color: #d0d4e5;
    }

    .campaign-form input[type="text"],
    .campaign-form input[type="number"],
    .campaign-form input[type="date"],
    .campaign-form textarea,
    .campaign-form select {
        width: 100%;
        background: rgba(7, 8, 12, 0.85);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 0.85rem 1.1rem;
        color: #f5f5f5;
        font-size: 1rem;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .campaign-form input:focus,
    .campaign-form textarea:focus,
    .campaign-form select:focus {
        outline: none;
        border-color: #e63946;
        box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.2);
    }

    .campaign-form textarea {
        min-height: 140px;
        resize: vertical;
    }

    .campaign-form input[type="file"] {
        border: none;
        padding-left: 0;
    }

    .action-row {
        display: flex;
        justify-content: flex-end;
        margin-top: 2rem;
    }

    .action-row button {
        background: linear-gradient(135deg, #e63946, #b5172f);
        border: none;
        border-radius: 999px;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        padding: 0.95rem 2.5rem;
        font-weight: 700;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .action-row button:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(230, 57, 70, 0.35);
    }
</style>
<?php $this->end(); ?>

<section class="master-wrapper">
    <h1>Forje sua pr&oacute;xima campanha</h1>
    <p>Defina os pilares da aventura e deixe o Guildhall cuidar do restante.</p>

    <?= $this->Form->create($campaign, ['type' => 'file', 'class' => 'campaign-form', 'enctype' => 'multipart/form-data']) ?>
        <div class="form-group">
            <?= $this->Form->control('name', [
                'label' => 'Campaign Name',
                'required' => true,
                'templates' => ['inputContainer' => '{{content}}'],
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('image', [
                'label' => 'Campaign Image',
                'type' => 'file',
                'accept' => 'image/*',
                'required' => false,
                'templates' => ['inputContainer' => '{{content}}'],
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('description', [
                'label' => 'Campaign Description',
                'type' => 'textarea',
                'rows' => 6,
                'templates' => ['inputContainer' => '{{content}}'],
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('system', [
                'label' => 'System',
                'type' => 'select',
                'options' => [
                    'Dungeons & Dragons 5e' => 'Dungeons & Dragons 5e',
                    'Tormenta20' => 'Tormenta20',
                    'Pathfinder 2e' => 'Pathfinder 2e',
                    'Savage Worlds' => 'Savage Worlds',
                    'Call of Cthulhu' => 'Call of Cthulhu',
                    'Custom' => 'Custom',
                ],
                'empty' => 'Selecione o sistema',
                'templates' => ['inputContainer' => '{{content}}'],
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('max_players', [
                'label' => 'Max Players',
                'type' => 'number',
                'min' => 1,
                'max' => 12,
                'required' => true,
                'templates' => ['inputContainer' => '{{content}}'],
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('start_date', [
                'label' => 'Start Date',
                'type' => 'date',
                'required' => true,
                'templates' => ['inputContainer' => '{{content}}'],
            ]) ?>
        </div>

        <div class="action-row">
            <button type="submit">Create Campaign</button>
        </div>
    <?= $this->Form->end() ?>
</section>
