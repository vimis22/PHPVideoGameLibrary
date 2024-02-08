@extends('layouts.master')
@include('layouts.topbar')

<hr class="themeText mx-3 my-4">
<div class="container text-center themeText">
    <h1 class="themeText display-3">Edit Game</h1>
    <h2 class="themeText">{{ $game->name }}</h2>

    <form action="{{ route('admin.updateGame', $game->id) }}" method="post">
        @csrf
        <div class="mt-2 mb-2">
            <label for="name" class="themeText">Name:</label>
            <input type="text" name="name" value="{{ $game->name }}" class="form-control" required>
        </div>

        <div class="mt-2 mb-2">
            <label for="description" class="themeText">Description:</label>
            <textarea name="description" class="form-control" required>{{ $game->description }}</textarea>
        </div>

        <div class="mt-2 mb-2">
            <label for="publishing_date" class="themeText">Publishing Date:</label>
            <input type="date" name="publishing_date" value="{{ $game->publishing_date }}" class="form-control" required>
        </div>

        <div class="mt-2 mb-2">
            <label for="category" class="themeText">Category:</label>
            <select name="category" class="form-control">
                @foreach ($categories as $categoryId => $categoryName)
                    <option value="{{ $categoryName }}">{{ $categoryName }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="themeText btn btn-outline-light">Update Game</button>
    </form>
</div>
