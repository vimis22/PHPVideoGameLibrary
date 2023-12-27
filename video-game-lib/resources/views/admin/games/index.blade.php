@extends('layouts.master')

@section('content')
    <h1>Admin - Games</h1>
    <a href="{{ route('admin.showCategories') }}">Manage Categories</a>
    <br><br>

    <ul class="nav nav-tabs" id="categoryTabs" role="tablist">
        @foreach ($categories as $category)
            <li class="nav-item">
                <a class="nav-link" id="tab_{{ $category->id }}" data-toggle="tab" href="#category_{{ $category->id }}" role="tab" aria-controls="category_{{ $category->id }}" aria-selected="false">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="tab-content" id="categoryTabsContent">
        @foreach ($categories as $category)
            <div class="tab-pane fade" id="category_{{ $category->id }}" role="tabpanel" aria-labelledby="tab_{{ $category->id }}">
                <ul>
                    @if(isset($gamesByCategory[$category->name]))
                        @foreach ($gamesByCategory[$category->name] as $game)
                            <li>
                                <a href="{{ route('admin.editGame', $game->id) }}">{{ $game->name }}</a>
                                <form action="{{ route('admin.deleteGame', $game->id) }}" method="post">
                                    @csrf
                                    <button type="submit">Delete</button>
                                </form>
                            </li>
                        @endforeach
                    @else
                        <li>No games available in this category.</li>
                    @endif
                </ul>
            </div>
        @endforeach
    </div>

    <a href="{{ route('admin.addGame') }}">Add New Game</a>
@endsection
