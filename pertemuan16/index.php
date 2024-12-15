<?php 
session_start();

if ( !isset ($_SESSION["login"])) {
    header("LOcation: login.php");
    exit;
}

require 'functions.php';
$siswa = query("SELECT * FROM siswa");


//tombol cari di click
if (isset($_POST["search"])) {
    $siswa = search($_POST["keyword"]);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>
    <center>
<h1>Daftar Siswa</h1>

<a href="tambah.php">Tambah data siswa</a>
<br>
<form action="" method="post">

    <input type="text" name="keyword" size="50" autofocus placeholder="Search" autocomplete="off">
    <button type="submit" name="search">Search</button>

</form>
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