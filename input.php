<html>
<head>
	<title>Input Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class='center'>
<fieldset>
	<legend><h2>Input Data Mahasiswa</h2></legend>
<form method="post" action="proses.php?aksi=tambah">
	<label>
        <div>NIM</div>
        <input type="text" name="nim" maxlength="10"/>
    </label>
    <label>
        <div>Nama</div>
        <input type="text" name="nama" maxlength="50"/>
    </label>
    <label>
        <div>Fakultas</div>
        <input type="text" name="fakultas" maxlength="40"/>
    </label>
	<label>
        <div>Jurusan</div>
        <input type="text" name="jurusan" maxlength="40"/>
    </label>
	<label>
        <div>Nilai UAS</div>
        <input type="text" name="uas" maxlength="8"/>
    </label>
    <input type="submit" name="simpan" value="SIMPAN"/>
	<input type="button" name="batal" value="BATAL" onclick="window.location.href='index.php';"/>
</form>
</fieldset>
</div>
</body>
</html>