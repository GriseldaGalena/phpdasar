<?php 
// koneksi ke database
// mysqli_connect("nama host", "username", "", "nama database");
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel siswa / query data siswa
$result = mysqli_query($conn, "SELECT * FROM siswa");


//ambil data (fetch/mengambil) siswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik (array yg index nya angka)
// mysqli_fetch_assoc() // mengembalikan array assosiatif (array yg index nya string)
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while ($s = mysqli_fetch_assoc($result) ) {
//     var_dump($s);
// }

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
<?php while ( $row = mysqli_fetch_assoc($result)) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">update</a> |
        <a href="">delete</a>
    </td>
    <td><img src="img/<?php echo $row["gambar"]; ?>" widht="50"></td>
    <td><?php echo $row["nisn"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>



</table>

</body>
</html>