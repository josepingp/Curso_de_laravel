@extends('layouts.landing')

@section('title', 'services')
    
@section('content')
    <h1>Services</h1>
    {{-- Para utilizar un componente en blade lo ahcemos así --}}
    @component('_components.card')
    
    {{-- Para definir las variables de los componentes se usa la directiva @slot --}}
    {{-- tiene dos maneras una es esta --}}
    @slot('title', 'service 1')
    {{-- y la otra esta --}}
    @slot('content')
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi doloremque, itaque pariatur </p>
    @endslot
    @endcomponent

    @component('_components.card')
    {{-- Para definir las variables de los componentes se usa la directiva @slot --}}
    @slot('title', 'service 2')
    @slot('content')
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi doloremque, itaque pariatur </p>
    @endslot
    @endcomponent

    @component('_components.card')
    {{-- Para definir las variables de los componentes se usa la directiva @slot --}}
    @slot('title', 'service 3')
    @slot('content')
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi doloremque, itaque pariatur </p>
    @endslot
    @endcomponent

    @component('_components.card')
    {{-- Para definir las variables de los componentes se usa la directiva @slot --}}
    @slot('title', 'service 4')
    @slot('content')
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi doloremque, itaque pariatur </p>
    @endslot
    @endcomponent

@endsection