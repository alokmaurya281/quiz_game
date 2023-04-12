<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediumLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medium_level')->insert(
            [
                'question_name' => 'What is the Native Language Of India?',
                'question_option1' => 'Hindi',
                'question_option2' => 'English',
                'question_option3' => 'Urdu',
                'question_option4' => 'Telgu',
                'level' => 'Medium',
                'answer'=>'Hindi',
        ]);
        DB::table('medium_level')->insert(
            [
            'question_name' => 'Which is the most widely spoken native and non-native language in the world?',
            'question_option1' => 'Hindi',
            'question_option2' => 'English',
            'question_option3' => 'Kannad',
            'question_option4' => 'Telgu',
            'level' => 'Medium',
            'answer'=>'English',
        ]);
        DB::table('medium_level')->insert(
            [
            'question_name' => 'Who is the world’s fastest land animal?',
            'question_option1' => 'Cheetah',
            'question_option2' => 'Lion',
            'question_option3' => 'Sher',
            'question_option4' => 'Rabbit',
            'level' => 'Medium',
            'answer'=>'Cheetah',
        ]);
        DB::table('medium_level')->insert(
            [
            'question_name' => 'Who gave the slogan Do or Die?',
            'question_option1' => 'Mahatma Gandhi',
            'question_option2' => 'Pt. Jawahar Lal Nehru',
            'question_option3' => 'Indira Gandhi',
            'question_option4' => 'Subhash Chandra Bosh',
            'level' => 'Medium',
            'answer'=>'Mahatma Gandhi',
        ]);
        DB::table('medium_level')->insert(
            [
            'question_name' => 'Which is the national Game of India?',
            'question_option1' => 'Hockey',
            'question_option2' => 'Cricket',
            'question_option3' => 'Carrom',
            'question_option4' => 'Kabaddi',
            'level' => 'Medium',
            'answer'=>'Hockey',
        ]);
    }
}
