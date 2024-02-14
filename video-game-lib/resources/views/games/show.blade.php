@extends('layouts.master')
@include('layouts.topbar')
<hr class="text-white mx-3 my-4">
<div class="logo_placement text-center">
    <h1 class="text-white">{{ $game->name }}</h1>
    <p class="text-white">{{ $game->description }}</p>
    <p class="text-white">Publishing date: {{ $game->publishing_date }}</p>
    <p class="text-white">Category: {{ $game->category }}</p>
</div>
