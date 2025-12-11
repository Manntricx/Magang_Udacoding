<?php
include 'conn.php';

$id = $_POST['id']; // sesuai input hidden
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan' WHERE id_mahasiswa='$id'");

header("Location: crud.php");
exit();
?>
