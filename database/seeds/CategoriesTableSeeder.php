<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $categories = [
            [
                'id'             => 1,
                'name'           => 'Category 1',
            ],

        ];

        Category::insert($categories);
    }
}
