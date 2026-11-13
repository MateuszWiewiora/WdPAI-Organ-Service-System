<?php

declare(strict_types=1);

namespace App\Controller;

final class AboutController extends AppController
{
    public function index(): void
    {
        $contacts = [
            [
                'firstName' => 'Anna',
                'lastName' => 'Kowalska',
                'email' => 'anna.kowalska@example.com',
            ],
            [
                'firstName' => 'Marek',
                'lastName' => 'Nowak',
                'email' => 'marek.nowak@example.com',
            ],
            [
                'firstName' => 'Julia',
                'lastName' => 'Wiśniewska',
                'email' => 'julia.wisniewska@example.com',
            ],
        ];

        $this->render('about', [
            'pageTitle' => 'O aplikacji',
            'contacts' => $contacts,
        ]);
    }
}
