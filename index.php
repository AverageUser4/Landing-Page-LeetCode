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

    <main id="theMain">
			
		  <div id="slideBarAndButtons1">
					<div class="slideButtonsContainer">
						<button id="right1">&gt;</button>
						<button id="left1">&lt;</button>
					</div>

					<div id="slideContainer1">
						<div id="slideInnerContainer1">
							<a class="slideImage1" href="#"><img src="resources/s1a.png"></a>
							<a class="slideImage1" href="#"><img src="resources/s1b.png"></a>
							<a class="slideImage1" href="#"><img src="resources/s1c.png"></a>
							<a class="slideImage1" href="#"><img src="resources/s1d.png"></a>
						</div>
					</div>
			</div>

      <div id="slideBarAndButtons2">
					<div class="slideButtonsContainer">
						<button id="right2">&gt;</button>
						<button id="left2">&lt;</button>
					</div>

					<div id="slideContainer2">
						<div id="slideInnerContainer2">
              <a class="slideImage2" href="#">
                <img src="resources/s2a.png">
                <p>LeetCode 75 Study Plan to Ace Interviews</p>
              </a>
							<a class="slideImage2" href="#">
                <img src="resources/s2b.webp">
                <p>14 Days Study Plan to Crack Algo</p>
              </a>
							<a class="slideImage2" href="#">
                <img src="resources/s2c.webp">
                <p>2 Weeks Study Plan to Tackle DS</p>
              </a>
							<a class="slideImage2" href="#">
                <img src="resources/s2d.png">
                <p>SQL Study Plan</p>
              </a>
							<a class="slideImage2" href="#">
                <img src="resources/s2e.webp">
                <p>Ultimate DP Study Plan</p>
              </a>
							<a class="slideImage2" href="#">
                <img src="resources/s2f.png">
                <p>Programming Skills Study Plan</p>
              </a>
							<a class="slideImage2" href="#">
                <img src="resources/s2g.png">
                <p>Graph Theory Study Plan</p>
              </a>
							<a class="slideImage2" href="#">
                <img src="resources/s2h.png">
                <p>Binary Search Study Plan</p>
              </a>
						</div>
					</div>
			</div>

      <hr>

      <div id="problemTypesContainer">
        <button id="problemTypesButton">Expand ▾</button>
        <?php echo str_repeat('
          <a href="#">Array <span>1142</span></a>
          <a href="#">String <span>549</span></a>
          <a href="#">Math <span>392</span></a>
          <a href="#">Dynamic Programming <span>383</span></a>
          <a href="#">Sorting <span>253</span></a>
          <a href="#">Depth-First Search <span>250</span></a>', 13); 
        ?>
      </div>

      <div id="problemGroupsLinks">
        <button id="problemGroupsLinksButton">&gt;&gt;</button>
        <div id="problemGroupsLinksInner">
          <a class="chosen" href="#">All Topics</a>
          <a href="#">Algorithms</a>
          <a href="#">Database</a>
          <a href="#">Shell</a>
          <a href="#">Concurrency</a>
        </div>
      </div>

      <div id="problemsParametersChoosersContainer">
        <div class="chooserTypeOne">
          <button id="listsButton">Lists</button>
          <ul id="listsDropdown">
            <li><button>LeetCode Curated Algo 170</button></li>
            <li><button>LeetCode Curated SQL 70</button></li>
            <li><button>Top 100 Liked Questions</button></li>
            <li><button>Top Interview Questions</button></li>
            <li><button>Favorite</button></li>
          </ul>
        </div>
        <div class="chooserTypeOne">
          <button id="difficultyButton">Difficulty</button>
          <ul id="difficultyDropdown">
            <li><button id="easyDifficultyButton">Easy</button></li>
            <li><button id="mediumDifficultyButton">Medium</button></li>
            <li><button id="hardDifficultyButton">Hard</button></li>
          </ul>
        </div>
        <div class="chooserTypeOne">
          <button id="statusButton">Status</button>
          <ul id="statusDropdown">
            <li><button><span>─</span>Todo</button></li>
            <li><button><span>✓</span>Solved</button></li>
            <li><button><span>٨</span>Attempted</button></li>
          </ul>
        </div>
        <div class="chooserTypeTwo">
          <button id="tagsButton">Tags</button>
          <div id="tagsDropdown">
            <input type="text" placeholder="Filter topics">
            <button id="topicsButton" class="chosen">Topics</button>
            <button id="companiesButton" class="blocked">Companies</button>
            <div id="anotherProblemTypesContainer">
              <?php echo str_repeat('
                <a href="#">Array</a>
                <a href="#">String</a>
                <a href="#">Math</a>
                <a href="#">Dynamic Programming</a>
                <a href="#">Sorting</a>
                <a href="#">Depth-First Search</a>', 13); 
              ?>
            </div>
            <button id="anotherProblemTypesButton">Expand</button>
            <hr>
            <button id="searchResetButton">↺ Reset</button>
          </div>
        </div>
      </div>

    </main>

    <aside id="theAside">
      <div style="background-color:red;width:100%;height:100px;"></div>
    </aside>

  </div>

  <script defer src="js/classes/DropdownHandler.js"></script>
  <script defer src="js/classes/SolidDropdownHandler.js"></script>
  <script defer src="js/classes/SlideBarHandler.js"></script>
  <script defer src="js/classes/ProblemTypesContainerHandler.js"></script>
  <script defer src="js/classes/ProblemGroupsLinksHandler.js"></script>
  <script defer src="js/classes/ExpandHandler.js"></script>
  <script defer src="js/scripts/main.js"></script>

</body>

</html>