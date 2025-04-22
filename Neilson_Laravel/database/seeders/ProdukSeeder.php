<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \App\Models\Produk::create([
        'nama' => 'Kursi Gaming',
        'kategori' => 'Furniture',
        'harga' => 1500000,
    ]);
    }

}
