<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookshelvesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bookshelves')->insert([
            ['code' => 'A01', 'name' => 'Rak A01'],
            ['code' => 'B01', 'name' => 'Rak B01'],
            ['code' => 'C01', 'name' => 'Rak C01'],
            // Tambahkan data rak buku lain sesuai kebutuhan Anda
        ]);
    }
}
