<?php
function renderProfileRelatedLinks() {
  $arr = [['📁', 'My Lists'], ['📓', 'Notebook'], ['🏆', 'Submissions'],
  ['📈', 'Progress'], ['🪙', 'Points'], ['📰', 'Sessions']];
  foreach($arr as $val)
    echo "<a href='#'><p>$val[0]</p><p>$val[1]</p></a>";
}
function renderOtherLinks($profile = true) {
  if($profile)
    $arr = [['📋', 'Orders'], ['✨', 'My Playgrounds'],
    ['🌚', 'Dark Side'], ['🚪', 'Sign Out']];
  else
    $arr = [['🧭', 'Explore'], ['📝', 'Problems'], ['💭', 'Discuss'], ['🥇', 'Contest']];
  foreach($arr as $val)
    echo "<a href='#'><span>$val[0]</span>$val[1]</a>";
}
function renderProfileInfo() {
  echo '
    <img src="resources/profile_picture.jpg" alt="Your profile picture.">
    <div>
      <p>User12345</p>
      <p>Access all features with our Premium subscription!</p>
    </div>';
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Problems - LeetCode</title>
  <link rel="stylesheet" href="css/main.css">

</head>

<body>

  <!-- what is displayed inside the header depends on viewport width -->
  <header id="theHeader">

    <div id="headerContentMobile">
      <button id="mobileMenuButton"><span id="mobileMenuIcon">☰</span></button>
      <a href="#"><img class="logo" src="resources/logo.png"></a>
      <button id="bell" class="bell">🔔</button>
    </div>

    <div id="headerContentDesktop">
      <div>
        <nav id="desktopLinks">
          <a href="#"><img class="logo" src="resources/logo.png"></a>
          <a href="#">Explore</a>
          <a href="#">Problems</a>
          <a href="#">Discuss</a>
          <a href="#">Contest</a>
          <button id="interviewButtonDesktop">
            Interview ▾
            <div id="interviewDropdownDesktop" class="dropdown">
              <a href="#">👥 Online Interview</a>
              <a href="#">📔 Assessment</a>
            </div>
          </button>
          <button id="storeButtonDesktop">
            Store ▾
            <div id="storeDropdownDesktop" class="dropdown">
              <a href="#">Redeem</a>
              <a href="#">Premium</a>
            </div>
          </button>
        </nav>
      </div>
      <div>
        <button id="bell2" class="bell">🔔</button>
        <a id="fire" href="#">🔥 <span>0</span>
          <div>
            <img src="resources/date.png">      
            Solve today's Daily Challenge to refresh your streak!
          </div>
        </a>
        <img id="profileMenuButtonDesktop" src="resources/profile_picture.jpg">
      </div>
    </div>

  </header>

  <!-- dropdowns that appear right under the header -->
  <div id="headerContentsWrapper">

    <nav id="mobileMenu" class="dropdown">
      <div class="profileInfo">
        <?php renderProfileInfo(); ?>
      </div>
      <div class="profileRelatedLinks">
        <?php renderProfileRelatedLinks(); ?>
      </div>
      <div class="verticalLinks">
        <?php renderOtherLinks(false); ?>
        <button id="interviewButton">
          <span>📅</span>
          Interview<span id="interviewArrow">▼</span>
        </button>
        <div id="interviewDropdown">
          <a href="#">Online Interview</a>
          <a href="#">Assessment</a>
        </div>
        <button id="storeButton">
          <span>🏪</span>
          Store<span id="storeArrow">▼</span>
        </button>
        <div id="storeDropdown">
          <a href="#">Redeem</a>
          <a href="#">Premium</a>
        </div>
      </div>
      <hr id="awesomeBorder">
      <div class="verticalLinks">
        <?php renderOtherLinks(); ?>
      </div>
    </nav>

    <div id="profileMenuDesktop" class="dropdown">
      <div class="profileInfo">
        <?php renderProfileInfo(); ?>
      </div>
      <div class="profileRelatedLinks">
        <?php renderProfileRelatedLinks(); ?>
      </div>
      <div class="verticalLinks">
        <?php renderOtherLinks(); ?>
      </div>
    </div>

    <div id="notificationsWrapper" class="dropdown">
      <div id="notificationsContainer">
        <?php
          for($i = 0; $i < 15; $i++) {
            echo '
              <a href="#">
                <div>ℹ️</div>
                <div>
                  Completed a daily challenge for June
                  LeetCoding Challenge 2022
                  <span>🪙</span>
                  <span>+10</span>
                </div>
                <div>3 days ago</div>
                <hr>
              </a>
            ';
          }
        ?>
      </div>

      <div id="notificationsBottom">
        <a>⚙️</a>
        <a>⋯</a>
      </div>
    </div>

  </div>

  <div id="mainContentWrapper">

    <main></main>

    <aside></aside>

  </div>

  <script defer src="js/classes/DropdownHandler.js"></script>
  <script defer src="js/classes/SolidDropdownHandler.js"></script>
  <script defer src="js/scripts/main.js"></script>

</body>

</html>