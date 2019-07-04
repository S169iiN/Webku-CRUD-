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
    <!-- Slider -->
    <section id="slider" class="clear">
      <div class=malasngoding-slider>
    <div class=isi-slider>
      <img src="gambar/gambar1.png" alt="Gambar 1">
      <img src="gambar/gambar2.png" alt="Gambar 2">
      <img src="gambar/gambar3.png" alt="Gambar 3">
    </div>
    </div>
    </section>
    <!-- main content -->
    <div id="intro">
      <section class="clear" >
        <!-- article 1 -->
        <article class="two_quarter">
          <h2>Lorum ipsum dolor</h2>
          <?php 
include ('koneksi.php');
$post=0;
if (isset($_GET['post'])) 
$post=$_GET['post']; 
$sql="select a.*,b.namakategori
        from post a
        join kategori b on a.idkategori=b.idkategori
        limit $post,2";
$result=$db_connect -> query($sql);

echo "<table border=0 class=table1>";
$no=0;
while ($row=$result->fetch_assoc()) {
$no=0;
$idpost=$row['idpost'];
$tanggal=$row['tanggalpost'];
$penulis=$row['penulis'];
$kategori=$row['idkategori'];
$namakategori=$row['namakategori'];
$isi_full=$row['isi'];
$isi_sebagian=substr($row['isi'],1,100);
echo "
<tr>
  <td>
    <small>Tanggal dipost : $tanggal, penulis : $penulis</small>
  </td>
</tr>
<tr>
  <td>
    <small>kategori : $namakategori</small>
  </td>
</tr>
<tr>
  <td>$isi_full</td>
</tr>
<tr>
  <td></td>
</tr>
<tr>
  <td><br></td>
</tr>
";
}
echo "</table>";
echo "komentar pengunjung : <br>";
include ('comment_post.php');

echo "<a href=index.php>HOME</a>";
 ?>
          
      </section>
    </div>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <div id="homepage" class="last clear">
      <section class="one_quarter">
        <h2 class="title">gantiiiiiiiiii</h2>
        
      
      </section>
      <section class="one_quarter">
        <h2 class="title">Quick Links</h2>
        <nav>
          <ul>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
            <li><a href="#">Amet consectetur</a></li>
            <li><a href="#">Praesent vel sem id</a></li>
            <li><a href="#">Curabitur hendrerit est</a></li>
            <li class="last"><a href="#">Sed a nulla urna</a></li>
          </ul>
        </nav>
      </section>
      <section class="two_quarter lastbox">
        <h2 class="title">About US</h2>
        <img class="imgl" src="images/demo/meow.jpg" width="130" height="130" alt="">
        <p>Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit.</p>
        <footer class="more"><a href="about-us.php">Read More &raquo;</a></footer>
      </section>
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
