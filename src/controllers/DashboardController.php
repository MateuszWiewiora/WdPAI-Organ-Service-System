<?php

declare(strict_types=1);

namespace App\Controller;

final class DashboardController extends AppController
{
    public function dashboard(): void
    {
        $this->render('home', [
            'pageTitle' => 'Moja aplikacja',
        ]);
    }
}
