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
        button {
    display: block;
    margin-top: 10px;
    padding: 8px 15px;
}

    </style>
</head>
<body>
<div class="table-wraper">
    <div class="form-wraper">
        <form action="simpan.php" method="post">
            <label for="">Nim</label>
            <input type="text" name="nim">
            <label for="">Nama</label>
            <input type="text" name="nama">
            <label for="">Jurusan</label>
            <select name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
            <button type="submit">Simpan</button>
        </form>
    </div>

    <table width="100%" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conn.php';
                $no = 1;
                $query = mysqli_query($conn,"SELECT * FROM mahasiswa");
                while ($data = mysqli_fetch_object($query)){
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data->nim ?></td>
                    <td><?php echo $data->nama ?></td>
                    <td><?php echo $data->jurusan ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data->id_mahasiswa ?>">Edit</a> |
                        <a href="hapus.php?id=<?php echo $data->id_mahasiswa ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++;
                }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
