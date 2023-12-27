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
                <a href="{{ route('showAccount') }}" class="btn btn-outline-light" type="button">
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
