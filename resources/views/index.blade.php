@extends('layouts.main')

@section('content')
    <div class="content">
    
        <div class="display-title">
            {{ $greeting }}
        </div>

        <div class="links">
            @foreach($tasks as $task)
                <a href="#">{{ $task }}</a>
            @endforeach
        </div>

    </div>
@endsection