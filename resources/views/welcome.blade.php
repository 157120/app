<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>

    <body>

        @include('menu')
        <section class = 'main-section'>
            <header></header>

            <article>
                @yield('content')
            </article>
        </section>

    </body>
</html>
