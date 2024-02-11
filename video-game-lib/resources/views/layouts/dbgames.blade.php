<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/DB</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
    <script defer src="{{ asset('themescript.js')}}"></script>
</head>
<body>
    <section class="gamebox-placement content_placement">
        @foreach ($games as $game)
        <div class="themeBack gamebox content_placement">
            <img src="{{ asset($game->image_path) }}" class="game_image">
                <div class="themeText game_name_placement content_placement">
                <p>
                    {{ $game->name }}
                </p>
                </div>
            </a>
        </div>
        @endforeach

    </section>
</body>
</html>

