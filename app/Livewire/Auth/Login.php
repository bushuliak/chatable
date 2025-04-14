<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Livewire\Home;
use Illuminate\Contracts\View\View;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use App\Livewire\Forms\Auth\LoginForm;

class Login extends Component
{
    public LoginForm $form;

    public function mount(): void
    {
        if (auth()->check()) {
            $this->redirect(Home::class);
        }
    }

    public function render(): View
    {
        return view('livewire.auth.login');
    }

    public function google(): void
    {
        $this->redirect(Socialite::driver('google')->redirect()->getTargetUrl());
    }

    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        $this->redirect(Home::class);
    }
}
