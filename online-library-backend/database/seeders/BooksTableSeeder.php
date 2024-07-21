<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'To Kill a Mockingbird',
                'description' => 'A novel about the serious issues of rape and racial inequality.',
                'genre' => 'Fiction',
                'price' => 10.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'description' => 'A dystopian social science fiction novel and cautionary tale about the dangers of totalitarianism.',
                'genre' => 'Science Fiction',
                'price' => 8.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pride and Prejudice',
                'description' => 'A romantic novel that charts the emotional development of the protagonist, Elizabeth Bennet.',
                'genre' => 'Romance',
                'price' => 12.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Great Gatsby',
                'description' => 'A novel about the American dream and the roaring twenties.',
                'genre' => 'Fiction',
                'price' => 14.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Moby-Dick',
                'description' => 'A novel about the voyage of the whaling ship Pequod.',
                'genre' => 'Adventure',
                'price' => 11.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'War and Peace',
                'description' => 'A novel that chronicles the French invasion of Russia.',
                'genre' => 'Historical Fiction',
                'price' => 13.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Catcher in the Rye',
                'description' => 'A story about teenage angst and rebellion.',
                'genre' => 'Fiction',
                'price' => 9.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Hobbit',
                'description' => 'A fantasy novel and prelude to the Lord of the Rings series.',
                'genre' => 'Fantasy',
                'price' => 10.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Crime and Punishment',
                'description' => 'A psychological drama about crime, guilt, and redemption.',
                'genre' => 'Psychological Fiction',
                'price' => 11.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Alchemist',
                'description' => 'A philosophical book about finding one\'s personal legend.',
                'genre' => 'Adventure',
                'price' => 9.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Anna Karenina',
                'description' => 'A tragic love story set in the high society of Russia.',
                'genre' => 'Romance',
                'price' => 12.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Brave New World',
                'description' => 'A dystopian novel about a futuristic society.',
                'genre' => 'Science Fiction',
                'price' => 9.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Jane Eyre',
                'description' => 'A novel about the experiences of its eponymous heroine.',
                'genre' => 'Gothic Fiction',
                'price' => 11.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Lord of the Rings',
                'description' => 'An epic fantasy novel about the quest to destroy a powerful ring.',
                'genre' => 'Fantasy',
                'price' => 25.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Wuthering Heights',
                'description' => 'A story of passionate but doomed love.',
                'genre' => 'Gothic Fiction',
                'price' => 10.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Picture of Dorian Gray',
                'description' => 'A philosophical novel about vanity and moral corruption.',
                'genre' => 'Philosophical Fiction',
                'price' => 8.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'One Hundred Years of Solitude',
                'description' => 'A multi-generational story of the Buendía family.',
                'genre' => 'Magic Realism',
                'price' => 13.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Les Misérables',
                'description' => 'A story of social injustice and redemption in 19th century France.',
                'genre' => 'Historical Fiction',
                'price' => 14.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Don Quixote',
                'description' => 'A satirical novel about a noble who imagines himself a knight.',
                'genre' => 'Adventure',
                'price' => 11.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Brothers Karamazov',
                'description' => 'A philosophical novel exploring faith, doubt, and reason.',
                'genre' => 'Philosophical Fiction',
                'price' => 12.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
