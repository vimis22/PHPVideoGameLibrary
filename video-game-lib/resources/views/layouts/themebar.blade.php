<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script defer src="{{ asset('themeselector.js')}}"></script>
</head>
<body>

<section>
    <div class="colorbox_placement">
        <p class="introduction themeText">Please choose a background color:</p>
        <input type="color" class="colorbox" id="backgroundpicker" value="#000000">
        <p class="introduction themeText">Please choose a text color:</p>
        <input type="color" class="colorbox" id="textpicker" value="#ffffff">
        <button id="colorized_button" class="access_buttons themebutton">Change Theme Colors</button>
    </div>

    <div class="colorbox_placement">
        <p class="themeText introduction">You can also choose between two default themes:</p>
        <select class="access_buttons" id="themeSelect">
            <option value="light" class="themeBack themeText">light</option>
            <option value="dark" class="themeBack themeText">dark</option>
        </select>
    </div>
</section>
