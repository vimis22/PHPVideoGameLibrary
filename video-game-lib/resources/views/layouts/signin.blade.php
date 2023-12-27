<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/account</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="d-flex align-items-center justify-content-center m-5">
    <h2 class="text-center text-white m-4">
        Log in to GAMEX
    </h2>
    <a class="btn btn-outline-light" id="backButton" href="{{ route('showIndex') }} ">
        Back
    </a>
</div>

<section>
    <div class="category_placement content_placement textstyle">
        <div class="search_placement login_box content_placement textstyle">
            <div class="logintext_placement1 textstyle">
                <p class="">
                    Please enter your Login Information here.
                </p>
            @if(auth()->check())
                <p>Logged in</p>
            @else
                <p>Logged out</p>
            @endif

            <form method="post" action="/account/login">
                @csrf
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>

            @if(auth()->check())
                <p>Logged in</p>
                <form method="post" action="/account/logout">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <p>Logged out</p>
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
                    <input type="password" name="current_password" placeholder="Current Password" required>
                    <input type="password" name="password" placeholder="New Password" required>
                    <input type="password" name="password_confirmation" placeholder="Confirm New Password" required>
                    <button type="submit">Change Password</button>
                </form>
            @endif

        </div>
    </div>
</section>

</body>
</html>
