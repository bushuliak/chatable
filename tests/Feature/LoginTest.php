<?php

declare(strict_types=1);

use App\Livewire\Auth\Login;
use App\Livewire\Home;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;

it('redirects authenticated users', function () {
    Livewire::actingAs(User::factory()->create())
        ->test(Login::class)
        ->assertRedirect(Home::class);
});

it('returns validation errors for empty email and password', function () {
    Livewire::test(Login::class)
        ->set('form.email', '')
        ->set('form.password', '')
        ->call('login')
        ->assertHasErrors(['form.email', 'form.password']);
});

it('returns a validation error when email format is invalid', function () {
    Livewire::test(Login::class)
        ->set('form.email', 'invalid-email')
        ->set('form.password', 'password')
        ->call('login')
        ->assertHasErrors(['form.email']);
});

it('logs in with valid credentials', function () {
    $user = User::factory()->create([
        'password' => Hash::make('password'),
    ]);

    Livewire::test(Login::class)
        ->set('form.email', $user->email)
        ->set('form.password', 'password')
        ->set('form.remember', true)
        ->call('login')
        ->assertRedirect(Home::class);

    expect(auth()->check())->toBeTrue();
});

it('fails', function () {
    expect(false)->toBeTrue();
});
