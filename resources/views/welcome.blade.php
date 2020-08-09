<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenido</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset("assets/css/welcomecss.css")}}">
        <link rel="stylesheet" href="{{asset("assets/css/welcomecss2.css")}}">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bienvenido
                </div>

                <div class="links">
                    <a href="https://elvagondeuninformatico.home.blog/">
                    -> *El vagón de un informático* <-</a>
                </div>
            </div>
        </div>
    </body>
</html>
