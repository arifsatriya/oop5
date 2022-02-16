<?php 
class database
{
 
 var $dbhost = "localhost";
 var $dbuser = "root";
 var $dbpass = "server01@";
 var $dbname = "oop5";
 var $dbconn;
 
//Method untuk membuat koneksi dengan database
 public function __construct()
 {
  	if (!($this->dbconn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname))) 
	{
   		die('<b>Periksa kode program koneksi anda : </b>'.mysqli_connect_error());
  	}
 }
	
//method untuk tampilkan semua data yang tersimpan (READ)
public function tampil_data()
{
  	$result = mysqli_query($this->dbconn, "SELECT * FROM mahasiswa");
  	if (!$result) 
	{
   		die("Periksa kode program koneksi / perintah sql anda");
  	}
  	else 
	{
   		while ($row = mysqli_fetch_assoc($result)) 
		{
    		$data[] = $row;
		}
   		return $data;
  	}
 }
	
//Method yang berisi perintah SQL untuk input data (CREATE)
public function input($nim, $nama, $fakultas, $jurusan, $uas)
 {
  	$query = "INSERT INTO mahasiswa(nim, nama, fakultas, jurusan, uas) VALUES ('$nim', '$nama', '$fakultas','$jurusan','$uas')";
	mysqli_query($this->dbconn,$query);
 }

//Method yang berisi perintah SQL untuk hapus data (DELETE)
public function hapus($nim)
 {
  	$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
  	mysqli_query($this->dbconn,$query);
 }

//method untuk tampilkan data dengan kriteria khusus (EDIT)
public function tampil_edit($nim)
{
  	$result = mysqli_query($this->dbconn, "SELECT * FROM mahasiswa where nim='$nim'");
  	if (!$result) 
	{
   		die("Periksa kode program koneksi / perintah sql anda");
  	}
  	else 
	{
   		while ($row = mysqli_fetch_assoc($result)) 
		{
    		$data[] = $row;
		}
   		return $data;
  	}
 }

//Method yang berisi perintah SQL untuk memperbarui data (UPDATE)
public function update($nim, $nama, $fakultas, $jurusan, $uas)
 {
  	$query = "UPDATE mahasiswa SET nama='$nama', fakultas='$fakultas', jurusan='$jurusan', uas='$uas' where nim='$nim'"; 
	mysqli_query($this->dbconn,$query);
 }

 function details()
 {
	$x = $this->dbname;
	return $x;
 }
}
$db = new database();

?>