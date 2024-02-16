<div class="container logo_placement">
    <div class="col">
        <div class="logo_placement">
            <a href="{{ route('showIndex') }}" class="logo_text themeText text-decoration-none display-3 row"><strong>GAME<i>X</i></strong></a>
        </div>
        <div class="row">
            <div class="logo_placement mt-2">
                @can('admin', App\Models\Game::class)
                    <p class="user_text_identifier themeText">You're logged in as Administrator</p>
                @else
                    <p class="user_text_identifier themeBack">You're logged in as Guest'</p>
                @endcan
            </div>

            <div class="page_btn_centering">
                <button class="page_buttons themeBack">
                    <a class="themeText btn btn-outline-light" id="backButton" href="{{ route('showIndex') }} ">
                        MAIN PAGE
                    </a>
                </button>
                <button class="page_buttons themeBack">
                    <a href="{{ route('showAccount') }}" class="themeText btn btn-outline-light" type="button">
                        ACCOUNT
                    </a>
                </button>
                <button class="page_buttons themeBack">
                    <a href="{{ route('showTheme') }}" class="themeText btn btn-outline-light" type="button">
                        THEME
                    </a>
                </button>
                @can('admin', App\Models\Game::class)
                    <button class="page_buttons themeBack">
                        <a class="themeText btn btn-outline-light" href={{ route('admin.showGames') }} type="button">
                            EDIT GAMES AND CATEGORIES
                        </a>
                    </button>
                @endcan
            </div>
        </div>
    </div>
</div>
