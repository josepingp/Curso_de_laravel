<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./assets/css/style.css') }}">
    {{-- Podemos dejar una @yield en espera para cargar estilos
    como no es obligatorio rellenarlos todos, solo lo usariamos cuando
    lo necesitemos --}}
    @yield('styles')
    <title> @yield('title') </title>
</head>
<body>
    {{-- Esta directiva @include sirve para implementar trozos de layout al layout --}}
    @include('layouts._partials.menu')
    {{-- Esta directiva sirve para usar el layout e inyectar lo que nosotros queramos dentro de el --}}
    @yield('content') 

    {{-- podemos hacer lo mismo que con styles para los scripts --}}
    @yield('script')
</body>
</html>