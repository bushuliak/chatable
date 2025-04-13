<?php

declare(strict_types=1);

use App\Livewire;
use Illuminate\Support\Facades\Route;

Route::get('/', Livewire\Home::class)->name('home');
Route::get('/login', Livewire\Auth\Login::class)->name('login');
Route::get('/register', Livewire\Auth\Register::class)->name('register');
Route::get('/logout', Livewire\Auth\Logout::class)->name('logout');
