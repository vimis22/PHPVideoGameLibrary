<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/account</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <div class="menubar content_placement">
        <div class="logo_placemenet content_placement">
            <img id=logo src="{{ asset('LOGO.png') }}" data-route="{{ route('showIndex') }}">
        </div>
        <div class="search_placement content_placement">
            <input id="searchbar" type="text" name="name"><br>
        </div>
        <div class="profile_placement content_placement">
            <button class="profile content_placement" id="newsButton" data-route="{{ route('showNews') }}">
                NEWS
            </button>
            <button class="profile content_placement" id="profileButton" data-route="{{ route('showAccount') }}">
                PROFILE
            </button>
        </div>
    </div>
</header>

<nav>
    <div class="category_placement content_placement">
        <div class="widetub_bar profile_textbar content_placement">
            <div class="loginbutton_left content_placement">
                <button class="category_buttons" id="backButton">
                    Back
                </button>
            </div>
            <div class="loginbutton_center content_placement">
                <p class="login_name_placement">
                    Log in to GAMEX
                </p>
            </div>
            <!-- The last button is honestly not necessary, but removing it fucks up the layout and that's stuff we honestly don't have time to deal with. -->
            <div class="loginbutton_right content_placement">
            </div>
        </div>
    </div>
</nav>

<section>
    <div class="category_placement content_placement textstyle">
        <div class="search_placement login_box content_placement textstyle">
            <div class="logintext_placement1 textstyle">
                <p>
                    Please enter your Login Information here.
                </p>
                <form action="{{route('user.handleLogin')}}" method="post">
                    <div class="login_information">
                        <div class="login_label_layout">
                            <label class="login_label">Username</label>
                        </div>
                        <div class="login_access_layout">
                            <input class="login_access" type="text" name="name"><br>
                        </div>
                    </div>
                    <div class="login_information">
                        <div class="login_label_layout">
                            <label class="login_label">Password</label>
                        </div>
                        <div class="login_access_layout">
                            <input class="login_access" type="password" name="password"><br>
                        </div>
                    </div>
                    <div class="logintext_placement2 content_placement">
                        <input class="login_buttons" type="submit" name="logIn" value="Log in">
                    </div>
                    <label class="logintext_placement2 content_placement">
                        Don't have an account? <a href="{{route('user.create')}}">Register here!</a>
                    </label>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>
