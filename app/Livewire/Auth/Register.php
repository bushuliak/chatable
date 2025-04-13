<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Livewire\Forms\Auth\RegisterForm;
use App\Livewire\Home;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Register extends Component
{
    public RegisterForm $form;

    public function mount(): void
    {
        if (auth()->check()) {
            $this->redirect(Home::class);
        }

        $this->form->fill(old());
    }

    public function render(): View
    {
        return view('livewire.auth.register');
    }

    public function google(): void
    {
        // TODO: Implement Google register
    }

    public function register(): void
    {
        $this->validate();

        $this->form->store();

        $this->redirect(Home::class);
    }
}
