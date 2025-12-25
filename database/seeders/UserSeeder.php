<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Utama',
            'email' => 'admin@contoh.com',
            'email_verified_at' => now(),
            'password' => bcrypt('rahasia123'),
        ]);

        User::factory(10)->create();
    }
}
