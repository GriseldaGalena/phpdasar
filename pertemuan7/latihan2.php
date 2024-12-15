<?php 
//cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) || !isset($_GET["nik"]) || !isset($_GET["jurusan"])
 || !isset($_GET["email"])){
//redirect
header("Location: SuperGlobals.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nik"]?></li>
        <li><?= $_GET["jurusan"]?></li>
        <li><?= $_GET["email"]?></li>
    </ul>
    <a href="SuperGlobals.php">Kembali ke Daftar Siswa</a>
</body>
</html>