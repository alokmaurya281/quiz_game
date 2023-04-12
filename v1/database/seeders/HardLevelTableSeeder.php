<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HardLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hard_level')->insert(
            [
            'question_name' => 'Which was the first country to use paper money?',
            'question_option1' => 'Pakistan',
            'question_option2' => 'USA',
            'question_option3' => 'India',
            'question_option4' => 'China',
            'level' => 'Hard',
            'answer'=>'China',
        ]);
        DB::table('hard_level')->insert(
            [
            'question_name' => 'Which month of the year has the least number of days?',
            'question_option1' => 'January',
            'question_option2' => 'February',
            'question_option3' => 'March',
            'question_option4' => 'April',
            'level' => 'Hard',
            'answer'=>'February',
        ]);
        DB::table('hard_level')->insert(
            [
            'question_name' => 'What is the National song of India?',
            'question_option1' => 'No option',
            'question_option2' => 'Other',
            'question_option3' => 'Jan Gan Man',
            'question_option4' => 'Vande Mataram',
            'level' => 'Hard',
            'answer'=>'Vande Mataram',
        ]);
        DB::table('hard_level')->insert(
            [
            'question_name' => 'Which is the principal source of energy for earth?',
            'question_option1' => 'The Sun',
            'question_option2' => 'Moon',
            'question_option3' => 'Mangal',
            'question_option4' => 'Other',
            'level' => 'Hard',
            'answer'=>'The Sun',
        ]);
        DB::table('hard_level')->insert(
            [
            'question_name' => 'Which is the longest river in the world?',
            'question_option1' => 'Nile',
            'question_option2' => 'Saraswati',
            'question_option3' => 'Kaveri',
            'question_option4' => 'Ganga',
            'level' => 'Hard',
            'answer'=>'Nile',
        ]);
    }
}
