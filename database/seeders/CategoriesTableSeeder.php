<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Kategori 1'],
            ['name' => 'Kategori 2'],
            ['name' => 'Kategori 3'],
            // Tambahkan data kategori lain sesuai kebutuhan Anda
        ]);
    }
}


