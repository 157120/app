<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>

        @include('menu')
        <section class = 'main-section'>
            <header></header>

            <article>
                @yield('content')
            </article>
        </section>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    </body>
</html>
