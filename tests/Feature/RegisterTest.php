<?php

declare(strict_types=1);

use App\Livewire\Auth\Register;
use App\Livewire\Home;
use App\Models\User;
use Livewire\Livewire;

it('redirects authenticated users', function () {
    Livewire::actingAs(User::factory()->create())
        ->test(Register::class)
        ->assertRedirect(Home::class);
});

it('returns validation errors for empty fields', function () {
    Livewire::test(Register::class)
        ->set('form.name', '')
        ->set('form.email', '')
        ->set('form.password', '')
        ->set('form.password_confirmation', '')
        ->call('register')
        ->assertHasErrors([
            'form.name',
            'form.email',
            'form.password',
        ]);
});

it('returns a validation error when email format is invalid', function () {
    Livewire::test(Register::class)
        ->set('form.name', 'Test User')
        ->set('form.email', 'invalid-email')
        ->set('form.password', 'password')
        ->set('form.password_confirmation', 'password')
        ->call('register')
        ->assertHasErrors(['form.email']);
});

it('registers a user with valid credentials', function () {
    $email = 'test@example.com';

    Livewire::test(Register::class)
        ->set('form.name', 'Test User')
        ->set('form.email', $email)
        ->set('form.password', 'password')
        ->set('form.password_confirmation', 'password')
        ->call('register')
        ->assertRedirect(Home::class);

    expect(User::where('email', $email)->exists())->toBeTrue()
        ->and(auth()->check())->toBeTrue();
});
