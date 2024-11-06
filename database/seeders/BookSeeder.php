<?php


/// database/seeders/BookSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Membuat buku baru
       Book::create([
            'title' => 'Laravel Guide',
            'author' => 'Taylor Otwell',
            'year' => 2020,
            'publisher' => 'Laravel Press',
            'city' => 'New York',
            'cover' => 'laravel_cover.jpg',
            'bookshelfs_id' => 1,
        ]);

 
    }
}


