<div class="container text-center mt-3">
    <div class="col">
        <a href="{{ route('showIndex') }}" class="text-white text-decoration-none display-3 row"><strong>GAME<i>X</i></strong></a>
        <div class="row">
            <div class="themeText mt-2">
                @can('admin', App\Models\Game::class)
                    EDIT GAMES AND CATEGORIES
                    </a>
                    <p class="themeText">You are currently logged in as admin.</p>
                @else
                    <p class="themeText">You are currently logged out and browsing as a guest.</p>
                @endcan
            </div>
            <div>
                <a href="{{ route('showAccount') }}" class="themeText btn btn-outline-light" type="button">
                    ACCOUNT
                </a>
                <a href="{{ route('showTheme') }}" class="themeText btn btn-outline-light" type="button">
                    THEME
                </a>
                @can('admin', App\Models\Game::class)
                    <a class="themeText btn btn-outline-light" href={{ route('admin.showGames') }} type="button">
                    EDIT GAMES AND CATEGORIES
                    </a>
                @endcan
            </div>
        </div>
    </div>
</div>
