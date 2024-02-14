<div class="container logo_placement">
    <div class="col">
        <div class="logo_placement">
            <a href="{{ route('showIndex') }}" class="logo_text themeText text-decoration-none display-3 row"><strong>GAME<i>X</i></strong></a>
        </div>
        <div class="row">
            <div class="logo_placement themeText mt-2">
                @can('admin', App\Models\Game::class)
                    <p class="user_text_identifier themeText">You are currently logged in as admin.</p>
                @else
                    <p class="user_text_identifier themeText">You are currently logged out and browsing as a guest.</p>
                @endcan
            </div>

            <div class="page_btn_centering">
                <a href="{{ route('showAccount') }}" class="page_buttons themeText themeBack themeText btn btn-outline-light" type="button">
                    ACCOUNT
                </a>
                <a href="{{ route('showTheme') }}" class="page_buttons themeText themeBack themeText btn btn-outline-light" type="button">
                    THEME
                </a>
                @can('admin', App\Models\Game::class)
                    <a class="page_buttons themeText themeBack btn btn-outline-light" href={{ route('admin.showGames') }} type="button">
                    EDIT GAMES AND CATEGORIES
                    </a>
                @endcan
            </div>
        </div>
    </div>
</div>
