<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\detail;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        detail::create(
            ['book_id' => 1,
            'author' => 'Author 1',
            'publisher' => 'Publisher 1',
            'year' => '2001',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 2,
            'author' => 'Author 2',
            'publisher' => 'Publisher 2',
            'year' => '2002',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 3,
            'author' => 'Author 3',
            'publisher' => 'Publisher 3',
            'year' => '2003',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 4,
            'author' => 'Author 4',
            'publisher' => 'Publisher 4',
            'year' => '2004',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 4,
            'author' => 'Author 4',
            'publisher' => 'Publisher 4',
            'year' => '2004',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 5,
            'author' => 'Author 5',
            'publisher' => 'Publisher 5',
            'year' => '2005',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 6,
            'author' => 'Author 6',
            'publisher' => 'Publisher 6',
            'year' => '2006',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 7,
            'author' => 'Author 7',
            'publisher' => 'Publisher 7',
            'year' => '2007',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 8,
            'author' => 'Author 8',
            'publisher' => 'Publisher 8',
            'year' => '2008',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 9,
            'author' => 'Author 9',
            'publisher' => 'Publisher 9',
            'year' => '2009',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );

        detail::create(
            ['book_id' => 10,
            'author' => 'Author 10',
            'publisher' => 'Publisher 10',
            'year' => '2010',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book.']
        );
    }
}

