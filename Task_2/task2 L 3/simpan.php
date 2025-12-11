<?php 
include 'conn.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($conn, "INSERT INTO mahasiswa(nim, nama, jurusan) VALUES('$nim', '$nama', '$jurusan')");

if ($query) {
    header('Location: crud.php'); // <- wajib pakai titik koma
    exit;
} else {
    echo "Gagal menyimpan data!";
}

?>
