{{-- con esta directiva le deciomos que layout tiene que usar --}}
@extends('layouts.landing')

{{-- con esta directiva inyectamos contenido en un yield --}}
{{-- de esta manera indicamos primero en qué yield inyectamos el contenido
y segundo introducimos un string --}}
@section('title', 'Home')

{{-- de esta manera solo indicamos en que yield inyectamos y acontinuacion
el contenido a inyectar luego cerramos la sección con @endsection --}}
@section('content')
    <h1>Index</h1>
@endsection

