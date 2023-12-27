<body>
    <section class="gamebox-placement content_placement">
        @foreach ($category_lists as $category_list)
            @if (strtolower($category_list->category->name) === strtolower($selectedCategory))
                <div class="gamebox content_placement">
                    <a href="{{ route('showGamePage', ['linkPath' => $category_list->game->link_path]) }}" class="gamebox_links">
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
