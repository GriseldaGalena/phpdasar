<?php 
require 'functions.php';
$siswa = query("SELECT * FROM siswa");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <center>
<h1>Daftar Siswa</h1>

<a href="tambah.php">Tambah data siswa</a>
<br>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NISN</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>


<?php $i = 1; ?>
<?php foreach($siswa as $row) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> |
        <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');">hapus</a>
    </td>
    <td><img src="img/<?php echo $row["gambar"]; ?>" widht="50"></td>
    <td><?php echo $row["nisn"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>



</table>

</body>
</html>