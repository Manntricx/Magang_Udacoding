<?php 
include 'lib/db.php';

if(isset($_GET['detail'])){
  $id = $_GET['detail'];

  $query = mysqli_query($connection,"SELECT * FROM events WHERE id='$id'");
  $data = mysqli_fetch_array($query);

  if(isset($_POST['daftar'])){
    $fullname = mysqli_real_escape_string($connection,$_POST['fullname']);
    $phone = mysqli_real_escape_string($connection,$_POST['phone']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);

    $query = mysqli_query($connection,"INSERT INTO user_event(id_event,fullname,phone,email)
                                      VALUES ('$id','$fullname','$phone','$email')");
    if($query){
      header('Location: index.php');
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
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">Event Apps</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard/dashboard.php">Dashboard</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Content here -->
    <div class="container">

    <div class="row-mt3">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="card-title"><h3 class="text-center"></h3><?php echo $data['event_name'] ?></div>
                    <p class="card-text">
                    <?php echo $data['event_description'] ?>
                    </p>
                    <span>Tanggal Event<?php echo $data['event_date'] ?></span>
                    <h3 class="text-center">Form Pendaftaran Event</h3>

<form method="post">
    <div class="form-group">
        <label>Nama lengkap</label>
        <input type="text" class="form-control" name="fullname" required>
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="number" class="form-control" name="phone" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit" name="daftar">Kirim</button>
    </div>
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