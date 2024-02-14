<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script defer src="{{ asset('themeselector.js')}}"></script>
</head>
<div class="d-flex align-items-center justify-content-center m-5">
    <div class="logo_placement">
        <h2 class="themeText text-center m-4">
            Login to <strong>GAME<i>X</i></strong>
        </h2>
    </div>
    <div class="logo_placement">
        <a class="themeText btn btn-outline-light" id="backButton" href="{{ route('showIndex') }} ">
            Back
        </a>
    </div>
</div>

<div class="access_placement">
    <div class="access_box category_placement content_placement textstyle">
        <div class="search_placement login_box content_placement textstyle">
            <div class="inputfield_placement logintext_placement1 textstyle">
                <p class="themeText">
                    Please enter your Login Information here.
                </p>

            <form method="post" action="/account/login" class="logo_placement">
                @csrf
                <input class="inputfield_elements" type="text" name="username" placeholder="Username" required>
                <input class="inputfield_elements" type="password" name="password" placeholder="Password" required>
                <button class="access_buttons" type="submit">Login</button>
            </form>

            @if(auth()->check())
                <form method="post" action="/account/logout" class="logo_placement">
                    @csrf
                    <button class="access_buttons" type="submit">Logout</button>
                </form>
                <p class="logo_placement themeText">You are now Logged In</p>
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

                <form method="post" action="{{ url('/account/change-password') }}" class="logo_placement">
                    @csrf
                    <input class="themeText inputfield_elements" type="password" name="current_password" placeholder="Current Password" required>
                    <input class="themeText inputfield_elements" type="password" name="password" placeholder="New Password" required>
                    <input class="themeText inputfield_elements" type="password" name="password_confirmation" placeholder="Confirm New Password" required>
                    <button class="access_buttons" type="submit">Change Password</button>
                </form>
            @endif

        </div>
    </div>

</div>


