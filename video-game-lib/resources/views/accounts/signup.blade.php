<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/signup</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js', 'resources/js/ajax.js'])
</head>
<body>


<header>
    <div class="menubar content_placement">
        <div class="logo_placemenet content_placement">
            <img id=logo src="{{ asset('LOGO.png') }}">
        </div>
        <div class="search_placement content_placement">
            <input id="searchbar" type="text" name="name"><br>
        </div>
        <div class="profile_placement content_placement">
            <button class="profile content_placement">
                News
            </button>
            <button class="profile content_placement">
                Profile
            </button>
        </div>
    </div>
</header>

<nav>
    <div class="category_placement content_placement textstyle textstyle">
        <div class="widetub_bar profile_textbar content_placement">
            <div class="loginbutton_left content_placement">
                <button class="profile_buttons">
                    Back
                </button>
            </div>
            <div class="loginbutton_center content_placement textstyle">
                <p class="login_name_placement textstyle">
                    Sign Up
                </p>
            </div>
            <div class="loginbutton_right content_placement">
                <button class="profile_buttons">
                    Main Page
                </button>
            </div>
        </div>
    </div>
</nav>

<section>
    <div class="category_placement content_placement textstyle">
        <div class="search_placement login_box content_placement textstyle">
            <div class="logintext_placement1 content_placement textstyle">
                <p>
                    Please enter your Login Information here.
                </p>
                <!--{\{route('user.addUser')}\}-->
                <form method="post" id="signupForm">
                    @csrf
                    @method('post')
                    <div class="login_information">
                        <div class="login_label_layout">
                            <label class="login_label">Email Address</label>
                        </div>
                        <div class="login_access_layout">
                            <input class="login_access" type="email" name="email"><br>
                        </div>
                    </div>
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
                        <button class="login_buttons" id="submitbutton">Sign up</button>
                    </div>
                    <p class="logintext_placement2 content_placement">
                        Already have an account? <a href="/user/login">Head over here to Log in</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
    $('#submitbutton').click(function (e) {


        e.preventDefault(); // Prevent it from being sent along normally.

        var data = $('form').get(0);

        $.ajax({
            type: 'POST',
            url: "{{ route('user.addUser') }}",
            headers: {
                'X-CSRF-Token': '{!! csrf_token() !!}' // Laravel logic that I hope works.
            },
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data',
            data: new FormData(data),
            success: function (response) {
                alert("User succesfully created!");
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            } 
        });

    });

 </script>


</body>
</html>
