<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Handles the Guildhall landing experience that greets the user right after login.
 */
class GuildhallController extends AppController
{
    /**
     * Main hub selection screen rendered after the user signs in.
     */
    public function guildhall(): void
    {
        $this->viewBuilder()->setLayout('default');
    }
}
