<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

use App\Models\QuestionAnswer;
use Illuminate\Support\Facades\DB;

class HardLevelController extends Controller
{

  //  For creating a user
    public function create_user(){
        $username = Str::random(10);
        $create_user = DB::table('users')->insertGetId([
            'name'=>$username,
        ]);
        return redirect('hard/1?userid='.$create_user);

    }

     //For Main Medium Level View with some Questions 
    public function HardLevel($id){
        $question = DB::table('hard_level')->where('id',$id)->get();
        
        return view('hard_level')->with('data',[ 'question'=>$question]);
    }
   
    // For Submitting The Question after 30 seconds it will autosubmit and give us report
    public function SubmitQuestion(Request $request){
        $insert = DB::table('users_answer')->insert([
            'question_id'=>$request->question_id,
            'userid'=>$request->userid,
            'answer'=>$request->answer,
        ]);
        $correctanswer = DB::table('hard_level')->where('id',$request->question_id)->value('answer');
        $updatescore = DB::table('score')->insert([
            'userid'=>$request->userid,
            'score'=>0,
        ]);

        
            if($request->answer==$correctanswer){
                $score = DB::table('score')->where('userid',$request->userid)->value('score');
                    $newscore = $score+1;
                    $updatescore = DB::table('score')->where('userid',$request->userid)->update([
                        'score'=>$newscore,
                    ]);
              
            }else{
                $score = DB::table('score')->where('userid',$request->userid)->value('score');
                    $newscore = $score+0;
                    $updatescore = DB::table('score')->where('userid',$request->userid)->update([
                        'score'=>$newscore,
                    ]);

            }

       

        $newid = $request->question_id+1;
        if($newid<=5){
            if($insert){
                $question = DB::table('hard_level')->where('id',$newid)->get();
                return redirect('hard/'.$newid.'?userid='.$request->userid)->with('data',[ 'question'=>$question, 'userid'=>$request->userid]);
            }
        }
        else{
            $datanew = DB::table('users_answer')->where('userid',$request->userid)->get();
            $correct = DB::table('hard_level')->get();
            $score = DB::table('score')->where('userid',$request->userid)->value('score');
            if($score==1){
                $report = "Poor (1)";
            }
            elseif($score==2){
                $report="Bad (2)";
                
            }
            elseif ($score==3) {
                $report="Good (3)";
            }
            elseif($score==4){
                $report="Strong (4)";
            }
            else {
                $report="Very Strong (5)";
            }
            return view('hard_level_result')->with(['score'=>$report,'users_answer'=>$datanew,'correct_answer'=>$correct]);
        }
    }

}
