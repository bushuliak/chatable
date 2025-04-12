<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Livewire\Forms\Auth\LoginForm;

#[Layout('components.layouts.guest')]
class Login extends Component
{
    public LoginForm $form;

    public function mount(): void
    {
        $this->form->fill(old());
    }

    public function render(): View
    {
        return view('livewire.auth.login');
    }

    public function google(): void
    {
    }

    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();
    }
}
