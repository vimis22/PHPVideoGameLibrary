<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/index</title>
    <link rel="stylesheet" href="../css/groupstyle.css">
</head>
<body>

<header>
    <div class="menubar content_placement">
        <div class="logo_placemenet content_placement">
            <img id=logo src="LOGO.png">
        </div>
        <div class="search_placement content_placement">
            <input id="searchbar" type="text" name="name"><br>
        </div>
        <div class="profile_placement content_placement">
            <button class="profile content_placement">
                NEWS
            </button>
            <button class="profile content_placement" >
                PROFILE
            </button>
        </div>
    </div>
</header>

<nav class="category_placement content_placement">
    <div class="category widetub_bar content_placement">
        <button class="category_buttons">
            STRATEGY
        </button>
        <button class="category_buttons">
            DRIVING & RACING
        </button>
        <button class="category_buttons">
            ACTION
        </button>
        <button class="category_buttons">
            SHOOTING
        </button>
        <button class="category_buttons">
            THINKING
        </button>
    </div>
</nav>

{{--<?php--}}
{{--$gameboxtext = {"Test1","Test2","Test3","Test4","Test5"};--}}
{{--?>--}}
{{--@foreach ($gameboxtext as $text){--}}
{{--<p>{{$text}}</p>--}}
{{--}@endforeach--}}

<section class="gamebox-placement content_placement">
    //array(id,name,image.path,rating_scalar,user.name)
    <?php
    $gamebox_content = (
    array(1, "image1","example.img",5,"bullshit"),
    array(2, "image2","example.img",6,"bullshit"),
    array(3, "image3","example.img",7,"bullshit"),
    array(4, "image4","example.img",8,"bullshit"),
    array(5, "image5","example.img",7,"bullshit"),
    array(6, "image6","example.img",8,"bullshit")
    );

    foreach($gamebox_content as $game){ ?>
        <a href="gamepage.blade.php?gamename=<?=$game[1]?>" >
        <img src="<?=$game[1]?>" >
    <?php } ?>

    <div class="gamebox content_placement">
        <a href="gamepage.blade.php?gamename=slope" class="gamebox_links">
           <img src="EXAMPLE.png" class="game_image">
            <div class="game_name_placement content_placement">
             <p>
                 NAME OF THE GAME
             </p>
            </div>
        </a>
    </div>
</section>

</body>
</html>
