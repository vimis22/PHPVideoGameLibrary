@extends('layouts.master')

<div class="container text-center">
    <h1 class="text-white display-3">Browse Games</h1>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col">
                <a class="btn btn-dark text-white border-light" href="#{{ $category }}">{{ $category }}</a>
            </div>
        @endforeach
    </div>

    <!-- Sections for each category -->
    @foreach ($categories as $category)
        <section id="{{ $category }}" class="mt-5">
            <h2 class="text-white">Category: {{ $category }}</h2>
            <ul class="list-unstyled">
                @forelse ($gamesByCategory[$category] as $game)
                    <li class="text-white">{{ $game->name }}</li>
                @empty
                    <li class="text-white">No games available in this category.</li>
                @endforelse
            </ul>
        </section>
    @endforeach
</div>
