@extends('layouts.master')
@include('layouts.topbar')

<hr class="text-white mx-3 my-4">
<div class="container text-center">
    <div class="logo_placement">
        <h1 class="themeText display-3">Add New Category</h1>
    </div>
    <div>
        <form action="{{ route('admin.addCategory') }}" method="post" class="logo_placement">
            @csrf
            <div class="themeText">
                <label for="name">Name:</label>
                <input class="inputfield_elements" type="text" name="name" required>
                <button type="submit" class="access_buttons btn btn-outline-light">Add Category</button>
            </div>
        </form>
    </div>
</div>
