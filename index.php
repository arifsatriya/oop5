<?php
  	include 'koneksi.php';
?>

<html>
  <head>
	<link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css">
     table
		{
        	width: 840px;
        	margin: auto;
		}
      h1
		{
        	text-align: center;
      	}
	</style>
  </head>
  <body>
	<?php include 'menu.php'; ?>
    <h1>Tabel Biodata Mahasiswa Database : <i><?php echo $db->details() ?></i></h1>
    <br/>
    <table border="1">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>Nilai</th>
		<th>Pilih</th>
      </tr>
	  <?php
			$no = 1;
			foreach($db->tampil_data() as $x):
	
        	// mencetak atau menampilkan data
        	echo "<tr>";
        	echo "<td>$no</td>"; 
        	echo "<td>$x[nim]</td>"; 
        	echo "<td>$x[nama]</td>"; 
        	echo "<td>$x[fakultas]</td>"; 
        	echo "<td>$x[jurusan]</td>"; 
        	echo "<td>$x[uas]</td>"; 
	  		echo"<td>
			<a href='edit.php?nim=$x[nim]&aksi=edit'>Edit</a> ||
			<a href='proses.php?nim=$x[nim]&aksi=hapus'>Hapus</a></td>";
			echo "</tr>";
        	$no++;	
      		endforeach
	  ?>
    </table>
  </body>
</html>