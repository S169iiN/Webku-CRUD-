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