<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/DB</title>
    @vite(['resources/css/groupstyle.css', 'resources/js/app.js'])
    <script src="{{ asset('resources/js/themescript.js')}}"></script>
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
            <th class="themeText">Publish Date</th>
            <th class="themeText">{{ $game->publishment }}</th>
          </tr>
          <tr>
            <th class="themeText">Genre</th>
            @foreach ($categories as $category)
                <th class="themeText">{{ $category->name }}</th>
            @endforeach
          </tr>
          <tr>
            <th class="themeText">Description</th>
            <th class="themeText">{{ $game->description }}</th>
          </tr>
        </table>
    </div>
  </div>
</section>

</body>
</html>
