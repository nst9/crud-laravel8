<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        {{-- Para poder llamar request con protocolo HTTP en webs con HTTPS --}}
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="https://www.youtube.com/channel/UCd26IzVnJSUtIlrtVdYrSPw">
        <meta name="author" content="Nst">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Creado por Nst</title>

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Iconos --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

        {{-- Styles --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos_tema.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        {{-- Javascript --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </head>
    <body>
        @include('main.sections.nav')
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal">Creado por el canal Nst</h1>
                <p class="lead font-weight-normal">Este es un proyecto gratis creado con el framework laravel, por el canal de youtube <a href="https://www.youtube.com/channel/UCd26IzVnJSUtIlrtVdYrSPw" target="_blank">Nst</a>, pueden descargar el código desde el siguiente repositorio, <a href="https://github.com/nst9/crud-laravel8" target="_blank">Código</a>.
                </p>
                <a class="btn btn-outline-secondary" href="https://www.youtube.com/channel/UCd26IzVnJSUtIlrtVdYrSPw" target="_blank">Nst</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        @yield('content')
        @include('main.sections.footer')
        @stack('js')
    </body>
</html>
