<?php 
include('koneksi.php');
$sql="select *from comments ";
$result = $db_connect->query($sql) or die ($db_connect->error);

echo "<table border=0 class=table1>";

$no=0;
while($row=$result->fetch_assoc()){
$no++;
$id=$row['idcomment'];
$tanggal=$row['tanggal_comment'];
$user=$row['user'];
$comment=$row['comment'];

echo "
	<tr>
		<td><small><img src='images/demo/profile.png'></small></td>
	</tr>	
	<tr>
		<td><small> pada $tanggal </small></td>
	</tr>
	<tr>
		<td><small>Komentar : $comment </small></td>
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
echo "<b>tinggalkan komentar anda disini : </b> <br>";
echo "<i>Email dibutuhkan jika suatu etika kami ingin menghubungi anda saja, kosongkan jika ragu </i><br>";
?>

<form action="prosestambahcommentpost.php" method="post">
	<table class="table1">
		<input type="hidden" value="<?php echo $_GET['idpost'] ?>" name="idpost">
		<tr>
			<td>Tanggal</td><td>:</td>
			<td><?php echo date('Y-m-d H:m:s'); ?><input type="hidden" value="<?php echo date ('Y-m-d H:m:s'); ?> " name="tanggal_comment"></td>
		</tr>
		<tr>
			<td>Nama</td><td>:</td>
			<td><input type="text" name="nama" ></td>
		</tr>
		<tr>
			<td>Komentar</td><td>:</td>
			<td><input type="text" name="comment"></td>
		</tr>
		<tr>
			<td align="center" colspan="3">
				<input type="submit" value="kirim">
			</td>
		</tr>
	</table>
	
</form>