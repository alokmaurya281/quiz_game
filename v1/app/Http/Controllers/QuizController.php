<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Str;

use App\Models\QuestionAnswer;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function QuizHome(){
        return view('quiz_home');
    }


   
    

}
