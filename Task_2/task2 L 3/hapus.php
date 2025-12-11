<?php
include 'conn.php';

$id = $_GET['id']; // menangkap id dari url

// query hapus data
$query = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'");

if ($query) {
    header("Location: crud.php");
    exit;
} else {
    echo "Gagal menghapus data!";
}
?>
