<?php

declare(strict_types=1);

namespace App\Controller;

final class SecurityController extends AppController
{
    public function login(): void
    {
        if ($this->isPost()) {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // musimy sprawdzic czy email jest w db
            // musimy porwnac hashe hasel

            var_dump($email, $password);
            $this->render('projects', [
                'pageTitle' => 'Projects',
            ]);
            return;
        }

        $this->render('login', [
            'pageTitle' => 'Login',
        ]);
    }

    public function register(): void {

        if($this->isPost()) {
            $name = $_POST['name'] ?? '';
            $email = $_POST['myemail'] ?? '';
            $password = $_POST['password'] ?? '';   

            // insert do db

            $this->render('login', [
                'pageTitle' => 'Login',
            ]);
            return;
        }
        
        if($this->isGet()) {
            var_dump("🍕 HELLO, GET");
            $this->render('register', [
                'pageTitle' => 'Rejestracja',
            ]);
            return;
        }
    }
}
