<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar p-3">
                <ul class="d-flex list-unstyled gap-3">
                    <li><a href="{{ route('home')}} ">Home</a></li>
                    <li><a href="{{ route('contacts')}} ">Contatti</a></li>
                    <li><a href="{{ route('aboutus')}} ">About us</a></li>
                </ul>
            </nav>
        </header>
        <main class="pt-3 text-center">
            <h1>{{$page_title}}</h1>
            <h4>{{$email}}</h4>
        </main>
    </body>
</html>
