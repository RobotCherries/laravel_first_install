@extends('layouts.main')

<style>
    .v-clocking {
        display: grid;
        justify-content: center;
    }

    .v-clocking__f-container {
        position: relative;
    }
</style>

@section('content')

    <div class="content">
        <h1 class="title">Pontare</h1>

        <div class="v-clocking">
            <div class="v-clocking__f-container">
                @include('clocking.form')
            </div>
        </div>
    </div>

@endsection