<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hard_level', function (Blueprint $table) {
            $table->id();
            $table->string('question_name')->nullable();
            $table->string('question_option1')->nullable();
            $table->string('question_option2')->nullable();
            $table->string('question_option3')->nullable();
            $table->string('question_option4')->nullable();
            $table->string('level')->nullable();
            $table->string('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
