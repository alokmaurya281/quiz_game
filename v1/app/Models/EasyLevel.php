<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EasyLevel extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_name',
        'question_option1',
        'question_option2',
        'question_option3',
        'question_option4',
        'level',
        'answer'

    ];
}
