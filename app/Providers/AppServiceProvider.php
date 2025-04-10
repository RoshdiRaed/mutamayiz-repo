<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        // Create default user if it doesn't exist
        if (User::count() == 0) {
            User::create([
                'name' => 'Ashraf Alian',
                'email' => 'ashrafalian@gmail.com', // Make sure this email is unique
                'password' => Hash::make('12345678'), // Default password, you can change it
            ]);
        }
    }
}
