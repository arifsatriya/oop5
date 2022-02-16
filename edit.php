<?php
  	include 'koneksi.php';
?>

<html>
<head>
	<title>Edit Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class='center'>
<fieldset>
	<legend><h2>Input Data Mahasiswa</h2></legend>
<form method="post" action="proses.php?aksi=update">
<?php
foreach($db->tampil_edit($_GET['nim']) as $x):
?>
	<label>
        <div>NIM</div>
        <input readonly type="text" name="nim" maxlength="10"
		value="<?php echo $x['nim']; ?>"/>
    </label>
    <label>
        <div>Nama</div>
        <input type="text" name="nama" maxlength="50"
		value="<?php echo $x['nama']; ?>"/>
    </label>
    <label>
        <div>Fakultas</div>
        <input type="text" name="fakultas" maxlength="40"
		value="<?php echo $x['fakultas']; ?>"/>
    </label>
	<label>
        <div>Jurusan</div>
        <input type="text" name="jurusan" maxlength="40"
		value="<?php echo $x['jurusan']; ?>"/>
    </label>
	<label>
        <div>Nilai UAS</div>
        <input type="text" name="uas" maxlength="8"
		value="<?php echo $x['uas']; ?>"/>
    </label>
    <input type="submit" name="simpan" value="SIMPAN"/>
	<input type="button" name="batal" value="BATAL" onclick="window.location.href='index.php';"/>
<?php endforeach ?>
</form>
</fieldset>
</div>
</body>
</html>
