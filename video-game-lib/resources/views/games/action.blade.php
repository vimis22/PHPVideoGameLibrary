<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/action</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <div class="menubar content_placement">
        <div class="logo_placemenet content_placement">
            <img id=logo src="{{ asset('LOGO.png') }}" data-route="{{ route('showIndex') }}">
        </div>
        <div class="search_placement content_placement">
            <input id="searchbar" type="text" name="name"><br>
        </div>
        <div class="profile_placement content_placement">
            <button class="profile content_placement">
                NEWS
            </button>
            <button class="profile content_placement" >
                PROFILE
            </button>
        </div>
    </div>
</header>

<nav class="category_placement content_placement">
    <div class="category widetub_bar content_placement">
        <button class="category_buttons" id="strategyButton" data-route="{{ route('showStrategy') }}">
            STRATEGY
        </button>
        <button class="category_buttons" id="drivingRacingButton" data-route="{{ route('showDrivingRacing') }}">
            RACING
        </button>
        <button class="category_buttons category_selected" id="actionButton" data-route="{{ route('showAction') }}">
            ACTION
        </button>
        <button class="category_buttons" id="shootingButton" data-route="{{ route('showShooting') }}">
            SHOOTING
        </button>
        <button class="category_buttons" id="puzzleButton" data-route="{{ route('showPuzzle') }}">
            PUZZLE
        </button>
    </div>
</nav>

</body>
</html>
