<?php 
include 'koneksi.php';
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah")
 {
 	$db->input($_POST['nim'],$_POST['nama'],$_POST['fakultas'],
			   $_POST['jurusan'],$_POST['uas']);
 	header("location:index.php");
 }
 elseif($aksi == "hapus")
 { 	
 	$db->hapus($_GET['nim']);
	header("location:index.php");
 }
elseif($aksi == "update")
{
   $db->update($_POST['nim'],$_POST['nama'],$_POST['fakultas'],
			  $_POST['jurusan'],$_POST['uas']);
 	header("location:index.php");
}
?>