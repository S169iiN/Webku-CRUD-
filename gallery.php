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
              <li><a href="#">Album</a></li>
              <li><a href="#">Contact US</a></li>
            </ul>
        </li>
        
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
    <section id="gallery" class="clear">
      <figure>
        <header>Gallery Title Goes Here</header>
        <ul>
          <li class="first"><img src="images/demo/960x400.gif" alt=""></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li class="last"><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
          <li class="last"><a href="#"><img src="images/demo/spacer.gif" alt=""></a></li>
        </ul>
        <figcaption>Gallery Description Goes Here</figcaption>
      </figure>
    </section>
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    
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
