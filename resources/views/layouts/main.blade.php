<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body { background-color: #fff; color: #636b6f; font-family: 'Nunito', sans-serif; font-weight: 200; height: calc(100vh - 65px); margin: 0; }
            .top-right { position: absolute; right: 10px; top: 18px; z-index: 1; }
            .links > a { color: #636b6f; padding: 25px; font-size: 13px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase; }
            .display-title { font-size: 84px; text-align: center; }
            .title { font-size: 40px; text-align: center; margin-bottom: 60px; }
            .position-ref { position: relative; }
            .content { height: calc(100vh - 65px); margin-top: 65px; text-align: center; border: 1px solid black; padding: 50px 100px; }
            .m-b-md { margin-bottom: 30px; }
        </style>

        {{-- jQuery --}}
        {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        {{-- Moments JS --}}
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        {{-- DatePicker --}}
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        {{-- Bootsrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>


    <body>
        <nav class="navbar-laravel links top-right">
            <a href="/">Acasa</a>
            <a href="/intructiuni">Instructiuni</a>
            <a href="/pontare">Pontare</a>
            <a href="/panou-administrare">Panou administrare</a>
            <a href="/setari">Setari</a>
        </nav>

        <div>
            @yield('content')
        </div>
    </body>

</html>
