<?php 
  session_start();
  $user = $_SESSION['username'];
  $level = $_SESSION['level'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>webku</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1>< WEBSITEKU ></h1>
    </div>
    <form action="logout.php" method="post">
      <fieldset >
        <h1>
          <a href="login/login.php">< Login ></a>
        </h1>
        <h1>
          <a href="index.php?logout=success">< Logout ></a>
        </h1>
      </fieldset>
    </form>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown"><a href="#">WEB-learnig</a>
           <ul class="isi-dropdown">
              <li><a href="#">Html</a></li>
              <li><a href="#">CSS</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">JS</a></li>
            </ul>
        </li>
         <li class="dropdown"><a href="#">Galery</a>
           <ul class="isi-dropdown">
              <li><a href="about-us.php">Profile</a></li>
              <li><a href="gallery.php">Album</a></li>
              <li><a href="#">Contact Us</a></li>
              
            </ul>
        </li>
        <li class="last"><a href="#">Contact US</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <div id="about-us" class="clear">
      <div class="three_quarter first">
        <!-- ####################################################################################################### -->
        <section id="about-intro" class="clear">
          <blockquote>
            <p><span>&ldquo;</span> In odio. Mauris feugiat. Nunc posuere, felis sit amet faucibus convallis, tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Vivamus accumsan. Donec molestie pede vel urna curabitur eget sem ornare felis.</p>
          </blockquote>
          <p class="right">&quot;Vivamus accumsan / Company Director&quot;</p>
          <div class="panorama"><img class="imgholder" src="images/demo/695x250.gif" alt=""></div>
          
          <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <p>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </section>
        <!-- ####################################################################################################### -->
        <section id="skillset" class="clear">
          <h1>Indonectetus facilis</h1>
          <article class="clear">
            <div class="fl_left"><img src="images/demo/125x125.gif" alt=""></div>
            <div class="fl_right">
              <h2>Indonectetus facilis</h2>
              <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p><a href="#">Read More &raquo;</a></p>
            </div>
          </article>
          <article class="clear">
            <div class="fl_left"><img src="images/demo/125x125.gif" alt=""></div>
            <div class="fl_right">
              <h2>Indonectetus facilis</h2>
              <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p><a href="#">Read More &raquo;</a></p>
            </div>
          </article>
          <article class="clear">
            <div class="fl_left"><img src="images/demo/125x125.gif" alt=""></div>
            <div class="fl_right">
              <h2>Indonectetus facilis</h2>
              <p>Lorem ipsum dolor sit amet, consectetaur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p><a href="#">Read More &raquo;</a></p>
            </div>
          </article>
        </section>
        <!-- ####################################################################################################### -->
      </div>
      <!-- ####################################################################################################### -->
      <section id="team" class="one_quarter">
        <h2>The Team</h2>
        <ul>
          <li>
            <figure><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="images/demo/team-member.gif" alt="">
              <figcaption>
                <p class="team_name">Name Goes Here</p>
                <p class="team_title">Job Title Here</p>
              </figcaption>
            </figure>
          </li>
        </ul>
      </section>
      <!-- ####################################################################################################### -->
    </div>
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
  </div>
</div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>

    <p class="fl_right"><?php 
            include ("counter.php");
            echo "$kunjungan[0] kali kunjungan</p>";
            ?></p>


  </footer>
</div>
</body>
</html>
