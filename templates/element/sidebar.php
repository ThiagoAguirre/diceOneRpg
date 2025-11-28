<?php
/**
 * Sidebar element
 * Expects $identity (Identity object or array) when user is logged in
 */
$user = $user ?? ($identity ?? null);

// Helper to safely read a field from $user whether it's an object, entity or array
if (!function_exists('__getUserField')) {
    function __getUserField($user, string $key)
    {
        if ($user === null) {
            return null;
        }
        if (is_object($user)) {
            // Entities from Cake usually have get()
            if (method_exists($user, 'get')) {
                return $user->get($key);
            }
            // Plain DTO/object property
            if (property_exists($user, $key) || isset($user->{$key})) {
                return $user->{$key} ?? null;
            }
            // toArray fallback
            if (method_exists($user, 'toArray')) {
                $arr = $user->toArray();
                return $arr[$key] ?? null;
            }
        }
        if (is_array($user)) {
            return $user[$key] ?? null;
        }
        return null;
    }
}

$username = __getUserField($user, 'username') ?? __getUserField($user, 'name') ?? null;
$initial = $username ? strtoupper(substr((string)$username, 0, 1)) : 'U';
?>
<aside class="app-sidebar">
    <div class="sidebar-top">
        <div class="brand">
            <div class="brand-icon">⚔️</div>
            <div class="brand-title">RPG Quest</div>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item"><a href="<?= $this->Url->build('/') ?>" title="Início">🏠</a></li>
        <li class="sidebar-item"><a href="#" title="Campanhas">📜</a></li>
        <li class="sidebar-item"><a href="#" title="Comunidade">👥</a></li>
        <li class="sidebar-item"><a href="#" title="Blog">📚</a></li>
        <li class="sidebar-item"><a href="#" title="Fórum">💬</a></li>
        <li class="sidebar-item"><a href="#" title="Dashboard">⚙️</a></li>
    </ul>

    <div class="sidebar-bottom">
        <?php if ($user): ?>
            <div class="user-info">
                <div class="avatar"><?= h($initial) ?></div>
                <div class="user-name"><?= h($username ?? 'Usuário') ?></div>
            </div>
            <div class="logout">
                <?= $this->Form->postLink('Sair', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'logout-link']) ?>
            </div>
        <?php endif; ?>
    </div>
</aside>
