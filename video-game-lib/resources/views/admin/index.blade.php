@extends('layouts.master')

@section('content')
    <h1>Admin - Games</h1>
    <a href="{{ route('admin.showCategories') }}">Manage Categories</a>
    <br><br>
    @foreach ($games as $game)
        <a href="{{ route('admin.editGame', $game->id) }}">{{ $game->name }}</a>
        <form action="{{ route('admin.deleteGame', $game->id) }}" method="post">
            @csrf
            <button type="submit">Delete</button>
        </form>
        <br>
    @endforeach
    <a href="{{ route('admin.addGame') }}">Add New Game</a>
@endsection
