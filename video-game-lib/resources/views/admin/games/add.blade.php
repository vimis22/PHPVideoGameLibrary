@extends('layouts.master')
@include('layouts.topbar')

<hr class="themeText mx-3 my-4">
<div class="container text-center themeText">
    <div class="logo_placement">
        <h1 class="themeText display-3">Add New Game</h1>
    </div>
    <form action="{{ route('admin.addGame') }}" method="post">
        @csrf
        <div class="logo_placement themeText mt-2 mb-2">
            <label for="name">Name:</label>
            <input class="inputfield_elements" type="text" name="name" required>
        </div>

        <div class="logo_placement themeText mt-2 mb-2">
            <label for="description">Description:</label>
            <textarea class="access_buttons" name="description" required></textarea>
        </div>

        <div class="logo_placement themeText mt-2 mb-2">
            <label for="publishing_date">Publishing Date:</label>
            <input class="inputfield_elements" type="date" name="publishing_date" required>
        </div>

        <div class="logo_placement themeText mt-2 mb-2">
            <label for="category">Category:</label>
            <select class="inputfield_elements" name="category">
                @foreach ($categories as $categoryId => $categoryName)
                    <option value="{{ $categoryName }}">{{ $categoryName }}</option>
                @endforeach
            </select>
        </div>
        <div class="logo_placement">
            <button type="submit" class="access_buttons btn btn-outline-light">Add Game</button>
        </div>
    </form>
</div>


