@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
            @foreach($data['question'] as $question)
                <div class="card-header">{{$question->question_name}}</div>
                <div class="card-body">
                <div  style="text-align:right">
                    <p id="timer" class="mr-4"></p>
                </div>
                <form action="submitques" name="ques" method="post">
                    @csrf
                    <input type="text" name="userid" value="{{request()->get('userid')}} " hidden>
                    <input type="text" name="question_id" value="{{$question->id}}" hidden>
                   

                <div class="form-check ms-3 mt-2">
                    <input class="form-check-input" type="radio" name="answer" id="exampleRadios1" value="{{$question->question_option1}}" >
                    <label class="form-check-label" for="exampleRadios1">
                    {{$question->question_option1}}
                    </label>
                    </div>
                    <div class="form-check  ms-3 mt-2">
                        <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$question->question_option2}}">
                        <label class="form-check-label" for="exampleRadios2">
                        {{$question->question_option2}}
                        </label>
                    </div>
                    <div class="form-check  ms-3 mt-2">
                        <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$question->question_option3}}">
                        <label class="form-check-label" for="exampleRadios2">
                        {{$question->question_option3}}
                        </label>
                    </div>
                    <div class="form-check  ms-3 mt-2">
                        <input class="form-check-input" type="radio" name="answer" id="exampleRadios2" value="{{$question->question_option4}}">
                        <label class="form-check-label" for="exampleRadios2">
                        {{$question->question_option4}}
                        </label>
                    </div>
                    @break
                    @continue
                    @endforeach
                </div>
                <div class="d-flex justify-content-center align-items-center mb-2">
                <button class="btn btn-success w-25 mr-auto" type="submit">Next</button>

                </div>
                
                </form>
            </div>

                



              
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

var time_limit = 30;

var time_out = setInterval(() => {

  if(time_limit == 0) {
    document.ques.submit();
    
    $('#timer').html('Time Over');
        
  } else {
    
    if(time_limit < 10) {
      time_limit = 0 + '' + time_limit;
    }
    
    $('#timer').html('00:' + time_limit);
    
    time_limit -= 1;
    
  }

}, 1000);

//     function timer(){

        

//     }

//    var wait=setTimeout("document.ques.submit();",5000);

</script>
@endsection
