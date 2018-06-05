<?php require_once ("db.php"); ?>

<html lang="en">
<head>
  <title>E-class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
   session_start();
   
  $user = $_SESSION['user'];
	$query = mysqli_query($db, "SELECT * FROM user WHERE nim = '$user' ");
	$session = mysqli_fetch_assoc($query);
   
   if(!isset($_SESSION['user'])){
      header("location:index.php");
   }
?>

<div class="container">
    <h1>Peminjaman Kelas</h1>
            <h1>Selamat Datang <b><?php echo $session['nama']; ?></b></h1>
</div>


</br>
<div class='container'>
<div class='row'>
<div class='col'>
<div class='card' style='width: 18rem;'>
  <i class='fa fa-building' style='font-size:36px'></i>
  <div class='card-body'>
    <a href='ruang/h3.php'><h5 class='card-title'>H3</h5></a>
    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <a href="ruang/h4.php"><h5 class="card-title">H4</h5></a>
    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <a href="ruang/h5.php"><h5 class="card-title">H5</h5></a>
    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <a href="ruang/h6.php"><h5 class="card-title">H6</h5></a>
    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <a href="ruang/h7.php"><h5 class="card-title">H7</h5></a>
    
  </div>
</div>
</div>
</div>
</div>

</body>
</html>