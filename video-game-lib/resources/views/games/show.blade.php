@extends('layouts.master')
@include('layouts.topbar')
<hr class="text-white mx-3 my-4">
<div class="text-center">
    <div class="logo_placement">
        <h1 class="themeText">{{ $game->name }}</h1>
    </div>
    <div class="logo_placement">
        <p class="themeText">{{ $game->description }}</p>
    </div>
    <div class="logo_placement">
        <p class="themeText">Publishing date: {{ $game->publishing_date }}</p>
    </div>
    <div class="logo_placement">
        <p class="themeText">Category: {{ $game->category }}</p>
    </div>
</div>
