@extends('layouts.master')

@section('content')
    <h1>Add New Game</h1>
    <form action="{{ route('admin.addGame') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <label for="publishing_date">Publishing Date:</label>
        <input type="date" name="publishing_date" required>

        <label for="category">Category:</label>
        <select name="category">
            @foreach ($categories as $categoryId => $categoryName)
                <option value="{{ $categoryName }}">{{ $categoryName }}</option>
            @endforeach
        </select>


        <!-- Add other fields as needed -->

        <button type="submit">Add Game</button>
    </form>
@endsection
