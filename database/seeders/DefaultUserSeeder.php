<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ashraf Alian',
            'email' => 'ashrafalian@gmail.com', // Make sure this email is unique
            'password' => Hash::make('12345678'), // Default password, you can change it
        ]);

    }
}
