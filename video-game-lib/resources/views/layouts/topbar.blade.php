<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="container text-center mt-3">
    <div class="col">
        <a href="{{ route('showIndex') }}" class="text-white text-decoration-none display-3 row"><strong>GAME<i>X</i></strong></a>
        <div class="row">
            <div class="mt-2">
                @auth
                    <p class="text-white">You are currently logged in as admin.</p>
                @else
                    <p class="text-white">You are currently logged out and browsing as a guest.</p>
                @endauth
            </div>
            <div>
                <a href={{ route('showAccount') }} class="btn btn-outline-light" type="button">
                    ACCOUNT
                </a>
                @auth
                    <a href={{ route('admin.showGames') }} class="btn btn-outline-light" type="button">
                    EDIT GAMES AND CATEGORIES
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>
</html>
