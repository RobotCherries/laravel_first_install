@extends('layout')

@section('content')

    <div class="content">
        <div class="title m-b-md">
            Welcome!
        </div>

        <div class="links">

            @foreach($tasks as $task)
                <a href="#">{{ $task; }}</a>
            @endforeach
        
        </div>
    </div>

@endsection