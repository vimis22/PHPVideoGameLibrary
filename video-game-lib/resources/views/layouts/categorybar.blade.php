<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])

</head>
<body>
<nav class="category_placement content_placement">
    <div class="category widetub_bar content_placement">
        <button class="themeText category_buttons {{ ($selectedCategory ?? '') === 'strategy' ? 'category_selected' : '' }}" id="strategyButton" data-route="{{ route('showStrategy') }}">
            STRATEGY
        </button>
        <button class="themeText category_buttons {{ ($selectedCategory ?? '') === 'racing' ? 'category_selected' : '' }}" id="drivingRacingButton" data-route="{{ route('showDrivingRacing') }}">
            RACING
        </button>
        <button class="themeText category_buttons {{ ($selectedCategory ?? '') === 'action' ? 'category_selected' : '' }}" id="actionButton" data-route="{{ route('showAction') }}">
            ACTION
        </button>
        <button class="themeText category_buttons {{ ($selectedCategory ?? '') === 'shooting' ? 'category_selected' : '' }}" id="shootingButton" data-route="{{ route('showShooting') }}">
            SHOOTING
        </button>
        <button class="themeText category_buttons {{ ($selectedCategory ?? '') === 'puzzle' ? 'category_selected' : '' }}" id="puzzleButton" data-route="{{ route('showPuzzle') }}">
            PUZZLE
        </button>
    </div>
</nav>
</body>
</html>
