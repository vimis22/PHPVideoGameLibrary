@extends('layouts.master')
@include('layouts.topbar')

<hr class="text-white mx-3 my-4">
<div class="container text-center">
    <h1 class="themeText display-3">Add New Category</h1>
    <form action="{{ route('admin.addCategory') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit" class="themeText btn btn-outline-light">Add Category</button>
    </form>
</div>
