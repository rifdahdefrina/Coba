<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        book::create(
            ['category_id' => 1,
            'title' => 'Book Title 1']
        );

        book::create(
            ['category_id' => 2,
            'title' => 'Book Title 2']
        );

        book::create(
            ['category_id' => 3,
            'title' => 'Book Title 3']
        );

        book::create(
            ['category_id' => 4,
            'title' => 'Book Title 4']
        );

        book::create(
            ['category_id' => 5,
            'title' => 'Book Title 5']
        );

        book::create(
            ['category_id' => 6,
            'title' => 'Book Title 6']
        );

        book::create(
            ['category_id' => 7,
            'title' => 'Book Title 7']
        );

        book::create(
            ['category_id' => 8,
            'title' => 'Book Title 8']
        );

        book::create(
            ['category_id' => 9,
            'title' => 'Book Title 9']
        );

        book::create(
            ['category_id' => 10,
            'title' => 'Book Title 10']
        );
    }
}