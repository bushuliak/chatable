<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use App\Livewire\Forms\Auth\RegisterForm;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Register extends Component
{
    public RegisterForm $form;

    public function mount(): void
    {
        $this->form->fill(old());
    }

    public function render(): View
    {
        return view('livewire.auth.register');
    }

    public function register(): void
    {
        $this->validate();

        $this->form->store();
    }
}
