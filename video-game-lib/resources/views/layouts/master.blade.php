
// The purpose of this code is to change the language in the page.
// But there is a problem with this code, and that is that statement automatically switch to english.
// This is because our statement is not stable enough to remember the current set language.

<?php
namespace Code\ressources\language;
if( $_GET['language'] == true ){
    $lang = $_GET['language'];
}else {
    $lang = "en";
}
?>

<!DOCTYPE html>
<html lang="$lang">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

@yield('content')

</body>
</html>
