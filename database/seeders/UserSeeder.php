<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin Penmas',
            'email' => 'admin@penmas.ikip.ac.id',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Create additional demo users
        User::create([
            'name' => 'Dosen Penmas',
            'email' => 'dosen@penmas.ikip.ac.id',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Staff Penmas',
            'email' => 'staff@penmas.ikip.ac.id',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);
    }
}
