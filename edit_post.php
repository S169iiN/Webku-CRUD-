<?php 
  session_start();
  $user = $_SESSION['username'];
  $level = $_SESSION['level'];
echo " Login Sebagai $user";
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
        <li><a href="loginadmin.php">Home</a></li>
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
        <li class="dropdown"><a href="#">Halaman Admin</a>
           <ul class="isi-dropdown">
              <li><a href="tampilpost.php">Tampil/Edit Postingan</a></li>
              <li><a href="tambahpost.php">Tambah Postingan</a></li>
             
            </ul>
        </li>
        
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- tambah post -->
<h2 class="title">Edit POST</h2>
        <?php 

include('koneksi.php');

$idpost=$_GET['p'];

$sql1="select * from post where idpost='$idpost'";
$result1=$db_connect->query($sql1);
while($row=$result1->fetch_assoc()){

$id=$row['idpost']; 
$tanggal=$row['tanggalpost'];
$penulis=$row['penulis']; 
$judul=$row['judul'];
$kategori=$row['idkategori']; 
$isi=$row['isi'];	
}
$user='';
if(isset($_SESSION['user'])) $user=$_SESSION['user']; else $user=$penulis;

$sql2='select * from kategori';
$result2=$db_connect->query($sql2);
?>

<!--form edit post -->

<form action="proseseditpost.php" method="post">
	<table class="table1">
		<tr>
			<td>Tangal</td><td>:</td>
			<td><input type="text" value="<?php echo date ('Y-m-d H:m:s'); ?>" name="tanggal"></td>
		</tr>
		<tr>
			<td>Penulis</td><td>:</td>
			<td><input type="text" value="<?php echo $user;?>" name="penulis"></td>
		</tr>
		<tr>
			<td>Judul</td><td>:</td>
			<td><input type="text" value="<?php echo $judul; ?> ">
				
			</td>
		</tr>
		<tr>
			<td>Kategori</td><td>:</td>
			<td><select name="idkategori">
				<?php 
				while($row=$result2->fetch_assoc()){
					$k 	 =$row['namakategori'];
					$idk =$row['idkategori'];
					echo "<option value=$idk>$k</option>";
				}

				 ?>
				
			</select></td>
		</tr>
		<tr>
			<td>ISI</td><td>:</td>
			<td><textarea name="isi"><?php echo $isi; ?></textarea></td>
		</tr>
		<tr>
			<td align="center" colspan="3">
				<input type="hidden" name="idpost" value="<?php echo $idpost; ?>">
				<input type="submit">
			</td>
		</tr>
	</table>
	
</form>

    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
        
      </section>
    </div>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    
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





