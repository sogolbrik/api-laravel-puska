<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Buku::create([
                'judul'        => fake()->sentence(3),
                'penulis'      => fake()->name(),
                'penerbit'     => fake()->company(),
                'tahun_terbit' => fake()->year(),
                'stok'         => fake()->numberBetween(1, 50),
            ]);
        }
    }
}
