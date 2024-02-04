<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script type="text/themescript.js" src="{{URL::asset ('js/hideAndView.js')}}"></script>
</head>
<body>

<section>
    <div class="colorbox_placement">
        <p class="introduction themeText">Please choose a background color:</p>
        <input type="color" class="colorbox" id="backgroundpicker" value="#ffffff">
        <p class="introduction themeText">Please choose a text color:</p>
        <input type="color" class="colorbox" id="textpicker" value="#000000">
        <button class="themebutton">Change Theme Color</button>
    </div>

    <div class="colorbox_placement">
        <p class="themeText introduction">You can also choose between two default themes:</p>
        <select id="themeSelect">
            <option value="light" class="themeBack themeText">light</option>
            <option value="dark" class="themeBack themeText">dark</option>
        </select>
    </div>

</section>
