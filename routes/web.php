<?php

declare(strict_types=1);

use App\Livewire;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::get('/login', Livewire\Auth\Login::class)->name('login');
Route::get('/register', Livewire\Auth\Register::class)->name('register');
