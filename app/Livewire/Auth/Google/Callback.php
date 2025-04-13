<?php

declare(strict_types=1);

namespace App\Livewire\Auth\Google;

use App\Livewire\Home;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Callback extends Component
{
    public function mount(): void
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            attributes: [
                'email' => $googleUser->email,
            ],
            values: [
                'name' => $googleUser->name,
                'password' => Hash::make(Str::random()),
            ],
        );

        auth()->login($user);

        $this->redirect(Home::class);
    }
}
