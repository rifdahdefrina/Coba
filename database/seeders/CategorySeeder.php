<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create(
            ['category' => 'Classics']
        );

        category::create(
            ['category' => 'Fantasy']
        );

        category::create(
            ['category' => 'Horror']
        );

        category::create(
            ['category' => 'Historical']
        );

        category::create(
            ['category' => 'Literary']
        );

        category::create(
            ['category' => 'Romance']
        );

        category::create(
            ['category' => 'ShortStories']
        );

        category::create(
            ['category' => 'Suspense']
        );

        category::create(
            ['category' => 'Thrillers']
        );

        category::create(
            ['category' => 'Biographies']
        );
    }
}


