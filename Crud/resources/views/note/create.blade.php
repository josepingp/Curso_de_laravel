@extends('layouts.app')

@section('content')
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
    
@endif



    <a href="{{ route('note.index') }}">Back</a>
    <form action="{{ route('note.store') }}" method="POST">
        {{-- esto es para proteccion cotra peticiones maliciosas --}}
        @csrf

        <label for="">Title:</label>
        <input type="text" name="title">
        <br>
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <label for="">Description:</label>
        <input type="text" name="description">
        @error('description')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="create">
    </form>
@endsection
