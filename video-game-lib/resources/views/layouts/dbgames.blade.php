<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/DB</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
</head>
<body>
    <section class="gamebox-placement content_placement">
        @foreach ($games as $game)
        <div class="gamebox content_placement">
            <a href="{{ asset($game->link_path) }}" class="gamebox_links">
            <img src="{{ asset($game->image_path) }}" class="game_image">
                <div class="game_name_placement content_placement">
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