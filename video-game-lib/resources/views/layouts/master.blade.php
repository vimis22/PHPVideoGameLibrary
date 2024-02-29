<?php
?>

{{--    This is page is where I have included my Javascript files, where they are implemented on every page.
 Please remember to look at the Groupstyle.css file, since the 60% has been changed there.--}}
<!DOCTYPE html>
<html lang="$lang">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
    <script defer src="{{ asset('themescript.js')}}"></script>
    <script defer src="{{ asset('themeselector.js')}}"></script>
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
</head>

<body class="themeBack">

@yield('content')
<input type="hidden" id="test" value="test"></input>
</body>
</html>
