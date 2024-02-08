@extends('layouts.master')

<div class="container text-center">
    <h1 class="themeText display-3">Browse Games</h1>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col">
                <a class="btn btn-dark themeText border-light" href="#{{ $category }}">{{ $category }}</a>
            </div>
        @endforeach
    </div>

    @foreach ($categories as $category)
        <section id="{{ $category }}" class="mt-5">
            <h2 class="themeText text-decoration-none">Category: {{ $category }}</h2>
            <ul class="list-unstyled text-decoration-none">
                @forelse ($gamesByCategory[$category] as $game)
                    <li class="themeText"><a class="btn btn-dark themeText border-light m-1" href="{{ route('showGame', $game->id) }}">{{ $game->name }}</a></li>
                @empty
                    <li class="themeText">No games available in this category.</li>
                @endforelse
            </ul>
        </section>
    @endforeach
</div>
