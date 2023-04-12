@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">{{ __('Choose Level') }}</div>

                <div class="btn-group mt-4">
                    <a href="/easy_level_start" class="btn btn-success">Easy</a>
                    <a href="/medium_level_start" class="btn btn-success">Medium</a>
                    <a href="/hard_level_start" class="btn btn-success">Hard</a>
                </div>



                
            </div>
        </div>
    </div>
</div>
@endsection
