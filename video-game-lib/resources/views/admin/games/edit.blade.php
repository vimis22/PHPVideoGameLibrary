@extends('layouts.master')
@include('layouts.topbar')

<hr class="themeText mx-3 my-4">
<div class="container text-center themeText">
    <div class="logo_placement">
        <h1 class="themeText display-3">Edit Game</h1>
    </div>
    <div class="logo_placement">
        <h2 class="themeText">{{ $game->name }}</h2>
    </div>

    <form action="{{ route('admin.updateGame', $game->id) }}" method="post">
        @csrf
        <div class="logo_placement mt-2 mb-2">
            <label for="name" class="themeText">Name:</label>
            <input type="text" name="name" value="{{ $game->name }}" class="inputfield_elements form-control" required>
        </div>

        <div class="logo_placement mt-2 mb-2">
            <label for="description" class="themeText">Description:</label>
            <textarea name="description" class="access_buttons form-control" required>{{ $game->description }}</textarea>
        </div>

        <div class="logo_placement mt-2 mb-2">
            <label for="publishing_date" class="themeText">Publishing Date:</label>
            <input type="date" name="publishing_date" value="{{ $game->publishing_date }}" class="inputfield_elements form-control" required>
        </div>

        <div class="logo_placement mt-2 mb-2">
            <label for="category" class="themeText">Category:</label>
            <select name="category" class="inputfield_elements form-control">
                @foreach ($categories as $categoryId => $categoryName)
                    <option value="{{ $categoryName }}">{{ $categoryName }}</option>
                @endforeach
            </select>
        </div>
        <div class="logo_placement">
            <button type="submit" class="access_buttons btn btn-outline-light">Update Game</button>
        </div>
    </form>
</div>
