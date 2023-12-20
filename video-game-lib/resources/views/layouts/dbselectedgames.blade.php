<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/DB</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
</head>

<body>
    <section class="gamebox-placement content_placement">
        @foreach ($category_lists as $category_list)
            @if (strtolower($category_list->category->name) === strtolower($selectedCategory))
                <div class="gamebox content_placement">
                    <a href="{{ asset($category_list->game->link_path) }}" class="gamebox_links">
                        <img src="{{ asset($category_list->game->image_path) }}" class="game_image">
                        <div class="game_name_placement content_placement">
                            <p> {{ $category_list->game->name }} </p>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </section>
</body>
</html>