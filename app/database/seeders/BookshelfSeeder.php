<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bookshelfs;

class BookshelfSeeder extends Seeder
{
    public function run()
    {
        Bookshelfs::create(['code' => 'A01', 'name' => 'Informatika']);
        Bookshelfs::create(['code' => 'B02', 'name' => 'Sipil']);
    }
}