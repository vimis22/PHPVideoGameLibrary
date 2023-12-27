@extends('layouts.master')

@section('content')
    <h1>Edit Game</h1>
    <form action="{{ route('admin.updateGame', $game->id) }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $game->name }}" required>

        <label for="description">Description:</label>
        <textarea name="description" required>{{ $game->description }}</textarea>

        <label for="publishing_date">Publishing Date:</label>
        <input type="date" name="publishing_date" value="{{ $game->publishing_date }}" required>

        <label for="category">Category:</label>
        <select name="category">
            @foreach ($categories as $categoryId => $categoryName)
                <option value="{{ $categoryName }}">{{ $categoryName }}</option>
            @endforeach
        </select>

        <button type="submit">Update Game</button>
    </form>
@endsection
