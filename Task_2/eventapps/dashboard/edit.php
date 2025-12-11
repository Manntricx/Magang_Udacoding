<?php
include '../lib/db.php';

if(isset($_GET['edit'])){
    $id = $_GET['edit'];

    $query = mysqli_query($connection,"SELECT * FROM events WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    if(isset($_POST['update_event'])){
        $event_name = mysqli_real_escape_string($connection,$_POST['event_name']);
    $event_description = mysqli_real_escape_string($connection,$_POST['event_description']);
    $event_date = mysqli_real_escape_string($connection,$_POST['event_date']);

    $query = mysqli_query($connection,"UPDATE events SET event_name='$event_name',
                                                        event_description='$event_description',
                                                        event_date='$event_date'
                                                        WHERE id='$id'");
    if($query){
        header('Location: dashboard.php');
    }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<!-- Content here -->
    <div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
        <h1 class="text-center">Dashboard Event</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                
                <div class="card-body">
                    <a class="btn btn-primary" href="dashboard.php">Kembali ke Dashboard</a>
                    <a href="../index.php" class=" btn btn-dark">Lihat Website</a>
                    <h1 class="text-center">Form Edit Event</h1>

                    <form method="post">
        
            <div class="form-group">
                <label>Nama Event</label>
                <input type="text" class="form-control" name="event_name" value="<?php echo $data ['event_name'] ?>">
            </div>
            <div class="form-group">
                <label>Deskripsi Event</label>
                <textarea name="event_description" class="form-control" id="" cols="30"  rows="10" ><?php echo $data ['event_description'] ?></textarea>
            </div>
            <div class="form-group">
                <label>Tanggal Event</label>
                <input type="date" class="form-control" name="event_date" value="<?php echo $data ['event_date'] ?>">
            </div>
        
            
            <button type="submit" class="btn btn-warning" name="update_event">Update</button>
        
      </form>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>