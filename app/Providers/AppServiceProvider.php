<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('admin', function(User $user) {
            return $user->role == 'admin';
        });
        
        Gate::define('mahasiswa', function(User $user) {
            return $user->role == 'mahasiswa';
        });
        
        Gate::define('pic', function(User $user) {
            return $user->role == 'pic';
        });
        
        Gate::define('kaprodi', function(User $user) {
            return $user->role == 'kaprodi';
        });
        
        Gate::define('dosen', function(User $user) {
            return $user->role == 'dosen';
        });
        
        Gate::define('mitra', function(User $user) {
            return $user->role == 'mitra';
        });
        
        Gate::define('staff', function(User $user) {
            return $user->role == 'staff';
        });
    }
}
