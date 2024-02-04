<body>
    <section class="gamebox-placement content_placement">
        @foreach ($category_lists as $category_list)
            @if (strtolower($category_list->category->name) === strtolower($selectedCategory))
                <div class="themeBack gamebox content_placement">
                        <img src="{{ asset($category_list->game->image_path) }}" class="game_image">
                        <div class="themeText game_name_placement content_placement">
                            <p> {{ $category_list->game->name }} </p>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </section>
</body>
</html>

