<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EasyLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('easy_level')->insert([
            'question_name' => 'What is the Capital Of India?',
            'question_option1' => 'New Delhi',
            'question_option2' => 'MP',
            'question_option3' => 'Uttar Pradesh',
            'question_option4' => 'Maharastra',
            'level' => 'Easy',
            'answer'=>'New Delhi',

        ]);
        DB::table('easy_level')->insert(
            [
            'question_name' => 'The national river of India?',
            'question_option1' => 'Kaveri',
            'question_option2' => 'Narmda',
            'question_option3' => 'Yamuna',
            'question_option4' => 'Ganga',
            'level' => 'Easy',
            'answer'=>'Ganga',
        ]);
        DB::table('easy_level')->insert(
            [
            'question_name' => 'What is the Capital Of Uttar Pradesh?',
            'question_option1' => 'Chennai',
            'question_option2' => 'Noida',
            'question_option3' => 'Lucknow',
            'question_option4' => 'Kanpur',
            'level' => 'Easy',
            'answer'=>'Lucknow',
        ]);
        DB::table('easy_level')->insert(
            [
            'question_name' => 'What is the National Animal?',
            'question_option1' => 'Tiger',
            'question_option2' => 'Lion',
            'question_option3' => 'Peacock',
            'question_option4' => 'Rabbit',
            'level' => 'Easy',
            'answer'=>'Tiger',
        ]);
        DB::table('easy_level')->insert(
            [
            'question_name' => 'Which is the national fruit of India?',
            'question_option1' => 'Apple',
            'question_option2' => 'Grapes',
            'question_option3' => 'Banana',
            'question_option4' => 'Mango',
            'level' => 'Easy',
            'answer'=>'Mango',
        ]);
    }
}
