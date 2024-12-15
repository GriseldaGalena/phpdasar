<?php
session_start();

if ( !isset ($_SESSION["login"])) {
    header("LOcation: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];


//query data siswa berdasarkan id
$s = query("SELECT * FROM siswa WHERE id = $id") [0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    

    // cek apakah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
            ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Ubah data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $s["id"];?>">
        
        <ul>
            <li>
                <label for="nisn">NISN : </label>
                <input type="text" name="nisn" id="nisn"
                required value="<?php echo $s ["nisn"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" 
                value="<?php echo $s ["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"
                value="<?php echo $s ["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan"
                value="<?php echo $s ["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $s['gambar']; ?>" widht="40"> <br>
                <input type="file" name="gambar" id="gambar"
                >
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>


    </form>
    
</body>
</html>