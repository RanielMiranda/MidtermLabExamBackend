<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $books = [
            [
                'title' => 'Book One',
                'author' => 'Author One',
                'published_year' => 2021,
                'genre' => 'Fiction',
                'description' => 'Description for Book One.',
            ],
            [
                'title' => 'Book Two',
                'author' => 'Author Two',
                'published_year' => 2020,
                'genre' => 'Non-Fiction',
                'description' => 'Description for Book Two.',
            ],
            [
                'title' => 'Book Three',
                'author' => 'Author Three',
                'published_year' => 2019,
                'genre' => 'Science Fiction',
                'description' => 'Description for Book Three.',
            ],
            [
                'title' => 'Book Four',
                'author' => 'Author Four',
                'published_year' => 2018,
                'genre' => 'Fantasy',
                'description' => 'Description for Book Four.',
            ],
            [
                'title' => 'Book Five',
                'author' => 'Author Five',
                'published_year' => 2017,
                'genre' => 'Mystery',
                'description' => 'Description for Book Five.',
            ],
            [
                'title' => 'Book Six',
                'author' => 'Author Six',
                'published_year' => 2016,
                'genre' => 'Romance',
                'description' => 'Description for Book Six.',
            ],
            [
                'title' => 'Book Seven',
                'author' => 'Author Seven',
                'published_year' => 2015,
                'genre' => 'Horror',
                'description' => 'Description for Book Seven.',
            ],
            [
                'title' => 'Book Eight',
                'author' => 'Author Eight',
                'published_year' => 2014,
                'genre' => 'Thriller',
                'description' => 'Description for Book Eight.',
            ],
            [
                'title' => 'Book Nine',
                'author' => 'Author Nine',
                'published_year' => 2013,
                'genre' => 'Historical',
                'description' => 'Description for Book Nine.',
            ],
            [
                'title' => 'Book Ten',
                'author' => 'Author Ten',
                'published_year' => 2012,
                'genre' => 'Biography',
                'description' => 'Description for Book Ten.',
            ],
        ];

        DB::table('books')->insert($books);
    }
}
