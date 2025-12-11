<!DOCTYPE html>
<html>
<head>
    <title>Crud Mahasiswa</title>
    <style type="text/css">
        *{
            margin:0;
            padding:0;
            font-family: "segoe UI";
        }
        .table-wraper{
            width:90%;
            margin:100px auto;
        }
        .form-wraper{
            padding:20px 0;
        }
        label {
            display: block;
            padding:5px 0;
        }
        input,select {
            padding:5px 10px;
        }
        td {
            padding:10px;
        }
    </style>
</head>
<body>
<div class="table-wraper">
    <div class="form-wraper">
        <?php 
            include 'conn.php';
            $id = $_GET['id'];
            $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id'");
            while($data = mysqli_fetch_object($query)){
        ?>
        <form action="update.php" method="post">
            <!-- wajib dikirimkan ke update.php -->
            <input type="hidden" name="id" value="<?php echo $data->id_mahasiswa ?>">

            <label for="">Nim</label>
            <input type="text" name="nim" value="<?php echo $data->nim ?>">

            <label for="">Nama</label>
            <input type="text" name="nama" value="<?php echo $data->nama ?>">

            <label for="">Jurusan</label>
            <select name="jurusan">
                <option value="Teknik Informatika" <?php if($data->jurusan == 'Teknik Informatika') { echo 'selected ';}?>>Teknik Informatika</option>
                <option value="Sistem Informasi" <?php if($data->jurusan == 'Sistem Informasi') { echo 'selected ';}?>>Sistem Informasi</option>
            </select>

            <button type="submit">Simpan</button>
        </form>
        <?php
            }
        ?>
    </div>
</div>
</body>
</html>
