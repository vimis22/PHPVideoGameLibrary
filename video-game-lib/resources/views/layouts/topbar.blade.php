<div class="container text-center mt-3">
    <div class="col">
        <a href="{{ route('showIndex') }}" class="text-white text-decoration-none display-3 row"><strong>GAME<i>X</i></strong></a>
        <div class="row">
            <input class="form-control text-bg-dark col mf" type="text" name="name">
            <button class="btn btn-outline-light col-1">
                Search
            </button>
        </div>
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
            </div>
        </div>
    </div>
</div>
