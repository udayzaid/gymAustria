<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use App\Livewire\Auth\LoginModal;
use App\Livewire\Auth\RegisterModal;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::component('auth.login-modal', LoginModal::class);
        Livewire::component('auth.register-modal', RegisterModal::class);
    }
}
