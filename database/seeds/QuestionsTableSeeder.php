<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $questions = [
            [
                'id'             => 1,
                'question_text'  => 'Question 1',
                'category_id'    => 1,
            ],

            [
                'id'             => 2,
                'question_text'  => 'Question 2',
                'category_id'    => 1,
            ],

        ];

        Question::insert($questions);
    }

}
