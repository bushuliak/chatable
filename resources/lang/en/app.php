<?php

declare(strict_types=1);

return [
    'welcome' => 'Welcome to :app',
    'welcome_back' => 'Welcome back to :app',

    'forms' => [
        'login' => [
            'action' => 'Sign in',
            'question' => 'Have an account?',
            'with' => 'Sign in with :provider',
        ],
        'register' => [
            'action' => 'Sign up',
            'question' => 'Don\'t have an account?',
            'with' => 'Sign up with :provider',
        ],

        'forgot_password' => [
            'question' => 'Forgot password?',
        ],
    ],

    'inputs' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter your name',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter your email address',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Enter your password',
        ],
        'password_confirmation' => [
            'label' => 'Password confirmation',
            'placeholder' => 'Re-enter your password',
        ],
    ],

    'checkboxes' => [
        'remember' => 'Remember me',
    ],

    'separators' => [
        'or' => 'or',
    ],
];
