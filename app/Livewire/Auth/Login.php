<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Livewire\Home;
use Illuminate\Contracts\View\View;
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

        $this->form->fill(old());
    }

    public function render(): View
    {
        return view('livewire.auth.login');
    }

    public function google(): void
    {
        // TODO: Implement Google login
    }

    public function login(): void
    {
        if (auth()->check()) {
            $this->redirect(Home::class);
        }

        $this->validate();

        $this->form->authenticate();

        $this->redirect(Home::class);
    }
}
