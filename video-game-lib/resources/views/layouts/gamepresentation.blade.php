<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/DB</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
</head>
<body>
<nav>
  <div class="category_placement content_placement textstyle textstyle">
    <div class="widetub_bar profile_textbar content_placement">
      <div class="loginbutton_center content_placement textstyle">
        <p class="login_name_placement textstyle">
          {{ $game->name }}
        </p>
      </div>
    </div>
  </div>
</nav>

<section>
  <div class="gameinfobox_placement content_placement1">
    <div class="login_box content_placement1">
      <img class="game_wallpaper gamewallpaper_placement" src='{{ asset($game->image_path) }}'>
        <table class="tableinfo">
          <tr>
            <th>Publish Date</th>
            <th>{{ $game->publishment }}</th>
          </tr>
          <tr>
            <th>Genre</th>
            @foreach ($categories as $category)
                <th>{{ $category->name }}</th>
            @endforeach
          </tr>
          <tr>
            <th>Description</th>
            <th>{{ $game->description }}</th>
          </tr>
        </table>
    </div>
  </div>
</section>

</body>
</html> 