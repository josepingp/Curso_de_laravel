@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index') }}">BACK</a>

    <form action="{{ route('note.update', $note->id) }}" method="post">
        {{-- Si la ruta es de tipo diferente a post usamos esta directiva para indicarlo --}}
        @method('PUT')
        @csrf

        <label for="">Title:</label>
        <input type="text" name="title" value="{{ $note->title }}">
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <label for="">Description</label>
        <input type="text" name="description" value="{{ $note->description }}">
        @error('description')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Update">
    </form>
@endsection
