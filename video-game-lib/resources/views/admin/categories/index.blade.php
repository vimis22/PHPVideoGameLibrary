@extends('layouts.master')
@include('layouts.topbar')

<hr class="themeText mx-3 my-4">
<div class="container text-center textTheme">
    <div class="logo_placement">
        <h1 class="themeText display-3">Categories</h1>
    </div>
    <div class="logo_placement">
        <a class="themeText btn btn-outline-light mt-3 mb-3" href="{{ route('admin.addCategory') }}">Add New Category</a>
        @foreach ($categories as $category)
            <h3>{{ $category->name }}</h3>
        @endforeach
    </div>
</div>
