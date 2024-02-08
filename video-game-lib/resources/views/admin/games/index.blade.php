@extends('layouts.master')
@include('layouts.topbar')

<hr class="themeText mx-3 my-4">
<div class="container text-center themeText">
    <h1 class="themeText display-3">Edit Games and Categories</h1>
    <div>
        <a class="btn btn-dark themeText border-light col" href="{{ route('admin.showCategories') }}">Manage Categories</a>
        <a class="btn btn-dark themeText border-light col"  href="{{ route('admin.addGame') }}">Add New Game</a>
    </div>

    <br><br>
    @foreach ($games as $game)
        <div class="row mt-2 mb-2">
            <h2 class="col themeText">{{ $game->name }}</h2>
            <a class="col btn btn-dark themeText border-light" href="{{ route('admin.editGame', $game->id) }}">Edit</a>
            <form class="col themeText" action="{{ route('admin.deleteGame', $game->id) }}" method="post">
                @csrf
                <button class="col btn btn-dark themeText border-light" type="submit">Delete</button>
            </form>
        </div>
        <hr class="themeText mx-3 my-4">
    @endforeach
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
            alert("{{ session('success') }}");
            @endif
        });
    </script>
</div>
