<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\LandingPage::class)->name('landing-page');

Route::middleware('guest')->group(function () {
    
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');

});

Route::middleware('auth')->group(function () {
    
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');
    Route::get('/tickets', \App\Livewire\Tickets\MainTicket::class)->name('tickets');
    Route::get('/account', \App\Livewire\Account::class)->name('account');
});