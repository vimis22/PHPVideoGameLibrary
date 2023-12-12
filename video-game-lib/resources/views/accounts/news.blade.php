<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GAMEX/news</title>
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

<nav class="category_placement content_placement">
    <div class="category widetub_bar content_placement">
        <button class="category_buttons" id="strategyButton" data-route="{{ route('showStrategy') }}">
            STRATEGY
        </button>
        <button class="category_buttons" id="drivingRacingButton" data-route="{{ route('showDrivingRacing') }}">
            DRIVING & RACING
        </button>
        <button class="category_buttons" id="actionButton" data-route="{{ route('showAction') }}">
            ACTION
        </button>
        <button class="category_buttons" id="shootingButton" data-route="{{ route('showShooting') }}">
            SHOOTING
        </button>
        <button class="category_buttons" id="puzzleButton" data-route="{{ route('showPuzzle') }}">
            PUZZLE
        </button>
    </div>
</nav>

<section>
  <div class="mainnewscontainer content_placement">
    <p class="mainnewstitle">NEWS</p>
  </div>
</section>

<article>
  <div class="newscontainer content_placement">
    <div class="news-content">
      <h1>THE NEW LOCH NESS 2</h1>
      <h2 class="newsindicator">LATEST NEWS</h2>
    <p>
      A Good News to all Lovers of Loch Ness Games Series. We have got a new version of the game, which will be deployed on this Website.
    </p>
    <p>
      Credit: Ubisoft
    </p>
    </div>
  </dic>
</article>

</body>
</html>
