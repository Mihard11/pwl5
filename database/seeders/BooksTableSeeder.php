<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Buku 1',
                'author' => 'Penulis 1',
                'year' => 2020,
                'publisher' => 'Penerbit 1',
                'city' => 'Kota 1',
                'cover' => 'cover1.jpg',
                'quantity' => 10,
            ],
            [
                'title' => 'Buku 2',
                'author' => 'Penulis 2',
                'year' => 2019,
                'publisher' => 'Penerbit 2',
                'city' => 'Kota 2',
                'cover' => 'cover2.jpg',
                'quantity' => 8,
            ],
            [
                'title' => 'Buku 3',
                'author' => 'Penulis 3',
                'year' => 2021,
                'publisher' => 'Penerbit 3',
                'city' => 'Kota 3',
                'cover' => 'cover3.jpg',
                'quantity' => 12,
            ],
        ]);
    }
}
