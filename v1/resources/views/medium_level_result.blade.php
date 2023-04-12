@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Q No.</th>
                    <th scope="col">Question</th>
                    <th scope="col">Correct Answer</th>
                    </tr>
                </thead>
                <tbody>
                    
                @foreach($correct_answer as $answers)
                

                    <tr>
                    <th scope="row">{{$answers->id}}</th>
                    <td>{{$answers->question_name}}</td>
                    <td>{{$answers->answer}}</td>
                    </tr>
                    @endforeach
                    
                    

                   
                </tbody>
                </table>

                <p class="ms-3 mt-4"><b> Your General Knowledge is {{$score}}</b></p>

                <table class="table table-hover">
                <thead>
                    <tr>
                    
                    <th scope="col">Your Answer</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users_answer as $user_answer)
                    
                
                    <tr>
                    
                    <td>{{$user_answer->answer}}</td>
                    </tr>
                    @endforeach

                   
                </tbody>
                </table>

                    
                    
                   

              
            </div>
        </div>
    </div>
</div>


@endsection
