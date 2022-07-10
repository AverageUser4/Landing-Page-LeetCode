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
        <div id="problemsParametersChoosersInnerFirst">
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
          <div class="chooserTypeOne">
            <button id="optionsButton">⚙️</button>
            <ul id="optionsDropdown">
              <li><button><span></span>Show topic tags</button></li>
              <li><button><span></span>Premium questions</button></li>
            </ul>
          </div>
          <div>
            <input type="text" placeholder="Search questions">
          </div>
        </div>
        <div id="problemsParametersChoosersInnerSecond">
          <button id="pickOneButton"><span>⤨</span><span>Pick One</span></button>
        </div>
      </div>

      <div id="problemsTableContainer">
          <table id="problemsTable">
            <tr>
              <th>Status</th>
              <th class="changableOrder longestColumn">Title<span>↕</span></th>
              <th>Solution</th>
              <th class="changableOrder">Acceptance<span>↕</span></th>
              <th class="changableOrder">Difficulty<span>↕</span></th>
              <th>Frequency</th>
            </tr>
            <tr>
              <td>📅</td>
              <td class="longestColumn"><a href="#">1696. Jump Game VI</a></td>
              <td>👌</td>
              <td>43.9%</td>
              <td class="tableMedium">Medium</td>
              <td><span>🔒</span></td>
            </tr>
            <?php
              for($i = 1; $i <= 50; $i += 5) {
                echo '
                  <tr>
                    <td>✅</td>
                    <td class="longestColumn"><a href="#">'.($i).'. Two Sum</a></td>
                    <td>🎥</td>
                    <td>48.8%</td>
                    <td class="tableEasy">Easy</td>
                    <td><span>🔒</span></td>
                  </tr>
                  <tr>
                    <td>✅</td>
                    <td class="longestColumn"><a href="#">'.($i + 1).'. Add Two Numbers</a></td>
                    <td>👌</td>
                    <td>39.0%</td>
                    <td class="tableMedium">Medium</td>
                    <td><span>🔒</span></td>
                  </tr>
                  <tr>
                    <td>📈</td>
                    <td class="longestColumn"><a href="#">'.($i + 2).'. Longest Substring Without Repeating Characters</a></td>
                    <td></td>
                    <td>33.5%</td>
                    <td class="tableMedium">Medium</td>
                    <td><span>🔒</span></td>
                  </tr>
                  <tr>
                    <td>─</td>
                    <td class="longestColumn"><a href="#">'.($i + 3).'. Median of Two Sorted Arrays</a></td>
                    <td>─</td>
                    <td>34.5%</td>
                    <td class="tableHard">Hard</td>
                    <td><span>🔒</span></td>
                  </tr>
                  <tr>
                    <td>─</td>
                    <td class="longestColumn"><a href="#">'.($i + 4).'. Longest Palindromic Substring</a></td>
                    <td>👌</td>
                    <td>32.2%</td>
                    <td class="tableMedium">Medium</td>
                    <td><span>🔒</span></td>
                  </tr>';
              }
            ?>
          </table>
      </div>

      <div id="paginationAndPagesAmountContainer">
        <div id="pagesAmountContainer">
          <button id="pagesAmountButton">50 / page<span>▾</span></button>
          <div id="pagesAmountDropdown">
            <button>20 / page</button>
            <button class="chosen">50 / page ✔️</button>
            <button>100 / page</button>
          </div>
        </div>

        <div id="paginationContainer">
          <button class="disabled">&lt;</button>
          <button class="chosen">1</button>
          <button>2</button>
          <button>3</button>
          <button class="disappearing">4</button>
          <button class="disappearing">5</button>
          <button class="disappearing">6</button>
          <button class="disabled">...</button>
          <button>47</button>
          <button>&gt;</button>
        </div>
      </div>
    </main>

    <aside id="theAside">

      <div id="statsContainer">

        <div>
          <div>Session</div>
          <a href="#">Anonymous<span></span><span>⚙️</span></a>
        </div>

        <div>

          <div id="progressWheelContainer">

            <svg>
              <circle cx="50" cy="50" r="45" stroke="#4a4a4a" stroke-width="3" fill="none"/>
              <path id="arc-easy" stroke="#00B8A3" stroke-width="3" fill="none" stroke-linecap="round"/>
              <path id="arc-medium" stroke="#FFC01E" stroke-width="3" fill="none" stroke-linecap="round"/>
              <path id="arc-hard" stroke="#A73D3F" stroke-width="3" fill="none" stroke-linecap="round"/>
            </svg>

            <div id="pw-content-container">
              <div class="pw-basic-view">
                <div>All</div>
                <div>68</div>
                <div>2338</div>
              </div>
            </div>

          </div>

          <div id="solved-of-difficulty-container">

            <div id="stats-easy-container">
              <div>Easy</div>
              <div class="sodc-solved-amount">52<span>/578</span></div>
            </div>

            <div id="stats-medium-container">
              <div>Medium</div>
              <div class="sodc-solved-amount">16<span>/1245</span></div>
            </div>

            <div id="stats-hard-container">
              <div>Hard</div>
              <div class="sodc-solved-amount">0<span>/511</span></div>
            </div>

          </div>

        </div>

      </div>

      <div id="study-plan-container">

        <a href="#">

          <div>📅</div>

          <div>
            <div>Study Plan</div>
            <div>Complete and win badges</div>
          </div>

          <div>&gt;</div>

        </a>

      </div>

      <div id="featured-container">

        <div>Featured Lists</div>

        <div id="fc-items">
					<a href="#"><span>💻</span>Top Interview Questions</a>
					<a href="#"><span>🔝</span>Top 100 Liked Questions</a>
					<a class="fc-locked" href="#"><span>🇫</span>Top Facebook Questions</a>
					<a class="fc-locked" href="#"><span>🇬</span>Top Google Questions</a>
					<a class="fc-locked" href="#"><span>🅰️</span>Top Amazon Questions</a>
					<a href="#"><span>🥵</span>LeetCode Curated Algo 170</a>
					<a class="fc-locked" href="#"><span>Ⓜ️</span>Top Microsoft Questions</a>
					<a href="#"><span>🤖</span>LeetCode Curated SQL 70</a>
				</div>

				<button id="fc-show-button">▾ Show More</button>

      </div>

			<div id="calendar-container">

				<div>
					<div>Day 10</div>
					<div>06:17:56 left</div>
					<div>
						<button id="calendar-left-button">&lt;</button>
						<button id="calendar-right-button">&gt;</button>
					</div>
				</div>

				<div style="display: grid; grid-template-columns: auto auto auto auto auto auto auto;">

				  <div>S</div><div>M</div><div>T</div>
					<div>W</div><div>T</div><div>F</div><div>S</div>
					<?php
						echo str_repeat('<div></div>', 5);
						for($i = 1; $i <= 31; $i++) {	echo "<div>$i</div>";	}	
					?>

				</div>

			</div>

    </aside>

  </div>

  <script defer src="js/classes/DropdownHandler.js"></script>
  <script defer src="js/classes/SolidDropdownHandler.js"></script>
  <script defer src="js/classes/SlideBarHandler.js"></script>
  <script defer src="js/classes/ProblemTypesContainerHandler.js"></script>
  <script defer src="js/classes/ProblemGroupsLinksHandler.js"></script>
  <script defer src="js/classes/ExpandHandler.js"></script>
  <script defer src="js/classes/ProgressWheelHandler.js"></script>
  <script defer src="js/classes/OtherExpandHandler.js"></script>
  <script defer src="js/scripts/main.js"></script>

</body>

</html>