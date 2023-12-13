<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/gamepage</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <div class="menubar">
        <div class="logo_placemenet">
            <img id=logo src="{{ asset('LOGO.png') }}" data-route="{{ route('showIndex') }}">
        </div>
        <div class="search_placement">
            <input id="searchbar" type="text" name="name"><br>
        </div>
        <div class="profile_placement">
            <button class="profile content_placement" id="newsButton" data-route="{{ route('showNews') }}">
                NEWS
            </button>
            <button class="profile content_placement" id="profileButton" data-route="{{ route('showAccount') }}">
                PROFILE
            </button>
        </div>
    </div>
</header>

<section>
    <div>

    </div>
</section>

</body>
</html>
