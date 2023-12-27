@extends('layouts.master')

@section('content')
    <body class="text-white">
        <h1 class="text-white">{{ $game->name }}</h1>
        <p class="text-white">{{ $game->description }}</p>
        <p class="text-white">Publishing Date: {{ $game->publishing_date }}</p>
        <p class="text-white">Category: {{ $game->category }}</p>
    </body>
@endsection
