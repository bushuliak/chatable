<?php

declare(strict_types=1);

return [
    'welcome' => 'Bienvenue sur :app',
    'welcome_back' => 'Bienvenue à nouveau sur :app',

    'guest' => 'Invité',

    'actions' => [
        'login' => 'Se connecter',
        'register' => 'S\'inscrire',
        'logout' => 'Se déconnecter',
    ],

    'pages' => [
        'home' => 'Accueil',
    ],

    'forms' => [
        'login' => [
            'action' => 'Se connecter',
            'question' => 'Vous avez un compte?',
            'with' => 'Se connecter avec :provider',
        ],
        'register' => [
            'action' => 'S\'inscrire',
            'question' => 'Vous n\'avez pas de compte?',
            'with' => 'S\'inscrire avec :provider',
        ],

        'forgot_password' => [
            'question' => 'Mot de passe oublié?',
        ],
    ],

    'inputs' => [
        'name' => [
            'label' => 'Nom',
            'placeholder' => 'Entrez votre nom',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Entrez votre adresse email',
        ],
        'password' => [
            'label' => 'Mot de passe',
            'placeholder' => 'Entrez votre mot de passe',
        ],
        'password_confirmation' => [
            'label' => 'Confirmation du mot de passe',
            'placeholder' => 'Retapez votre mot de passe',
        ],
    ],

    'checkboxes' => [
        'remember' => 'Se souvenir de moi',
    ],

    'separators' => [
        'or' => 'ou',
    ],
];
