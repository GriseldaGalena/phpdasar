<?php 
// koneksi ke database
// mysqli_connect("nama host", "username", "", "nama database");
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }


    $query = "INSERT INTO siswa
                VALUES
            ('', '$nisn', '$nama', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yg di upload
    if( $error === 4 ){
        echo "<script>
                alert('Upload gambar terlebih dahulu!');
            </script>";
            return false;
    }

    // cek apakah yg di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
            return false;
    }

    // cel jika ukuran terlalu besar 
    if( $ukuranFile > 1000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar!');
            </script>";
            return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    


    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;


}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE DROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);

}


function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4  ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    $gambar = htmlspecialchars($data["gambar"]);


    $query = "UPDATE siswa SET 
                nisn = '$nisn',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
            ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function search($keyword) {
    $query = "SELECT * FROM siswa
                WHERE
            nama LIKE '%$keyword%' OR
            nisn LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
    return query($query);
}
?>