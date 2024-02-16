@extends('layouts.master')
@include('layouts.topbar')

<hr class="themeText mx-3 my-4">
<div class="container text-center themeText">
    <h1 class="logo_placement themeText display-3">Edit Games and Categories</h1>
    <div class="logo_placement">
        <button class="inputfield_elements">
            <a class="btn btn-dark border-light col" href="{{ route('admin.showCategories') }}">Manage Categories</a>
        </button>
    </div>
    <div class="logo_placement">
        <button class="inputfield_elements">
            <a class="btn btn-dark border-light col"  href="{{ route('admin.addGame') }}">Add New Game</a>
        </button>
    </div>
    <br><br>
    @foreach ($games as $game)
        <div class="row mt-2 mb-2">
            <div class="logo_placement">
                <h2 class="inputfield_elements col themeText">{{ $game->name }}</h2>
            </div>
            <div class="logo_placement">
                <button class="access_buttons">
                    <a class="col btn btn-dark border-light" href="{{ route('admin.editGame', $game->id) }}">Edit</a>
                </button>
            </div>
            <div class="logo_placement">
                <form class="col themeText" action="{{ route('admin.deleteGame', $game->id) }}" method="post">
                    @csrf
                    <button class="access_buttons col btn btn-dark border-light" type="submit">Delete</button>
                </form>
            </div>
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
