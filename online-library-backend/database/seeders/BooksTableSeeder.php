<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'Sample Book 1',
            'description' => 'This is a sample book description.',
            'genre' => 'Fiction',
            'price' => 9.99,
        ]);

        Book::create([
            'title' => 'Sample Book 2',
            'description' => 'This is another sample book description.',
            'genre' => 'Non-Fiction',
            'price' => 14.99,
        ]);
    }
}
