<?php

if (isset($_POST['submit'])) {

    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek input kosong
    if (empty($username) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }

    // Query cek user
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Jika user ditemukan
    if ($row = mysqli_fetch_assoc($result)) {

        // Verifikasi password
        if (!password_verify($password, $row['password'])) {
            header("Location: ../index.php?error=wrongpass");
            exit();
        }

        // Jika password benar → login sukses
        session_start();
        $_SESSION['sessionId'] = $row['id'];
        $_SESSION['sessionUser'] = $row['username'];

        header("Location: ../index.php?success=loggedin");
        exit();

    } else {
        // User tidak ditemukan
        header("Location: ../index.php?error=nouser");
        exit();
    }

} else {
    // Akses langsung ke file tanpa submit
    header("Location: ../index.php?error=accessforbidden");
    exit();
}

?>
