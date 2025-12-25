<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'cerita rakyat'
        ]);
        Kategori::create([
            'nama' => 'dongeng'
        ]);
        Kategori::create([
            'nama' => 'legenda'
        ]);
        Kategori::create([
            'nama' => 'fabel'
        ]);
        Kategori::create([
            'nama' => 'mitos'
        ]);
    }
}
