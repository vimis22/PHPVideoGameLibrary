<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script defer src="{{ asset('themeselector.js')}}"></script>
</head>
<div class="d-flex align-items-center justify-content-center m-5">
    <h2 class="themeText text-center m-4">
        Log in to GAMEX
    </h2>
    <a class="themeText btn btn-outline-light" id="backButton" href="{{ route('showIndex') }} ">
        Back
    </a>
</div>

<section>
    <div class="category_placement content_placement textstyle">
        <div class="search_placement login_box content_placement textstyle">
            <div class="logintext_placement1 textstyle">
                <p class="themeText">
                    Please enter your Login Information here.
                </p>
            @if(auth()->check())
                <p class="themeText">Logged in</p>
            @else
                <p class="themeText">Logged out</p>
            @endif

            <form method="post" action="/account/login">
                @csrf
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="themeText" type="submit">Login</button>
            </form>

            @if(auth()->check())
                <p class="themeText">Logged in</p>
                <form method="post" action="/account/logout">
                    @csrf
                    <button class="themeText" type="submit">Logout</button>
                </form>
            @else
                <p class="themeText">Logged out</p>
            @endif

            @if ($errors->has('login'))
                <div class="alert alert-danger">
                    {{ $errors->first('login') }}
                </div>
            @endif


            @if(auth()->check())
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ url('/account/change-password') }}">
                    @csrf
                    <input class="themeText" type="password" name="current_password" placeholder="Current Password" required>
                    <input class="themeText" type="password" name="password" placeholder="New Password" required>
                    <input class="themeText" type="password" name="password_confirmation" placeholder="Confirm New Password" required>
                    <button class="themeText" type="submit">Change Password</button>
                </form>
            @endif

        </div>
    </div>

</section>


