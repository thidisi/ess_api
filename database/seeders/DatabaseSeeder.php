<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User seeder
        User::create([
            'name' => 'Admin',
            'email' => 'admin@hachinet.com',
            'phone' => '0123456789',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10),
        ]);
    }
}
