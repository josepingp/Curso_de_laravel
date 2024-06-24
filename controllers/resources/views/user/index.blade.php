<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User list:</h1>
    {{-- Podemos hacer estructuras selectivas como un if con @if()--}}
    {{-- @if ($users->isEmpty())
        <p>The user list is empty</p>
    @else --}}
    {{-- <ul> --}}
        {{-- Podemos recorrer estructuras iterativas con @foreach() --}}
        {{-- @foreach ($users as $user) --}}
        {{-- <li>{{ $user->name }}</li> --}}
        {{-- Para finalizar la directiva --}}
        {{-- @endforeach --}}
    {{-- </ul> --}}
    {{-- acabamos el if --}}
    {{-- @endif --}}

    <ul>
{{-- Tambien podemos hacer un foreach convinado con un if --}}
    @forelse ($users as $user)
        <li>{{ $user->name }} -- {{ $user->age }}</li>
        {{-- si esta vacio --}}
    @empty
        <li>List is empty.</li>
    @endforelse
    </ul>




    {{-- Tambien podemos hacer switch 
    @switch($age)
        @case(18)
            <h1>18 years old</h1>
            @break
        @case(19)
            <h1>19 years old</h1>
            @break
        @default
            <h1>Another one</h1>
    @endswitch --}}
</body>
</html>