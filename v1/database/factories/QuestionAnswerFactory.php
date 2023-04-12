<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionAnswer>
 */
class QuestionAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_name'=>fake()->text(),
            'question_option1'=>fake()->text(),
            'question_option2'=>fake()->text(),
            'question_option3'=>fake()->text(),
            'question_option4'=>fake()->text(),
            'level'=>fake()->text(),
            'answer'=>fake()->text(),
        ];
    }
}
