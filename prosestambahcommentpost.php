<?php 
session_start();
include('koneksi.php');

$tanggal_comment=$_POST['tanggal_comment'];
$nama			=$_POST['nama'];
$idpost			=$row['idpost'];
$comment 		=$_POST['comment'];

$sql="insert into comments(tanggal_comment,user,idpost,comment)
	values ('$tanggal_comment','$nama','$idpost','$comment')";

	if ($db_connect->query($sql) === TRUE) {
	header("location: konten_post_full.php");
}
	else{
	echo "error: " .$sql . "<br>" . $db_connect->error;
}

 ?>