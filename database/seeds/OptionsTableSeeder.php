<?php

use App\Option;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            [
                'id'             => 1,
                'option_text'    => 'Option 1',
                'question_id'    => 1,
                'points'         => null,
            ],

            [
                'id'             => 2,
                'option_text'    => 'Option 2',
                'question_id'    => 1,
                'points'         => null,
            ],

            [
                'id'             => 3,
                'option_text'    => 'Option 3',
                'question_id'    => 1,
                'points'         => null,
            ],

            [
                'id'             => 4,
                'option_text'    => 'Option 4',
                'question_id'    => 1,
                'points'         => 10,
            ],


            [
                'id'             => 5,
                'option_text'    => 'Option 1',
                'question_id'    => 2,
                'points'         => null,
            ],

            [
                'id'             => 6,
                'option_text'    => 'Option 2',
                'question_id'    => 2,
                'points'         => null,
            ],

            [
                'id'             => 7,
                'option_text'    => 'Option 3',
                'question_id'    => 2,
                'points'         => null,
            ],

            [
                'id'             => 8,
                'option_text'    => 'Option 4',
                'question_id'    => 2,
                'points'         => 10,
            ],

          
        ];

        Option::insert($options);
    }
}
