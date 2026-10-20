<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin Konser',
            'email' => 'admin@konser.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Customer Pelanggan',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'customer', // <--- Set role menjadi customer
        ]);

        $this->call([
            EventSeeder::class
        ]);
    }
}