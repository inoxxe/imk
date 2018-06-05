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

<?php
  
  $user = $_SESSION['user'];
  $query = mysqli_query($db, "SELECT * FROM kelas WHERE nim = '$user' ");
  $surat = mysqli_fetch_assoc($query);
  $jam = $surat['jam']; 
  $hari = $surat['hari'];
   
?>

<div class="container">
    <h1>Peminjaman Kelas</h1>
            <h1>Selamat Datang <b><?php echo $session['nama']; ?></b></h1>

  
<table>
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <a href="input.php?id=<?php echo "H7.1"; ?>"><h5 class="card-title">H7.1</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "H7.1";
    $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
      if($count == 1) {
          echo "<p style=color:red;>Unavailable</p>";
        
      }else {
        echo "<p style=color:green;>Available</p>";
      }
      ?>
  </div>
</div>
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <a href="input.php?id=<?php echo "H7.1"; ?>"><h5 class="card-title">H7.2</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "H7.2";
    $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
      if($count == 1) {
          echo "<p style=color:red;>Unavailable</p>";
        
      }else {
        echo "<p style=color:green;>Available</p>";
      }
      ?>
  </div>
</div>
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <a href="input.php?id=<?php echo "H7.1"; ?>"><h5 class="card-title">H7.3</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "H7.3";
    $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
      if($count == 1) {
          echo "<p style=color:red;>Unavailable</p>";
        
      }else {
        echo "<p style=color:green;>Available</p>";
      }
      ?>
  </div>
</div>
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <a href="input.php?id=<?php echo "H7.1"; ?>"><h5 class="card-title">H7.4</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "H7.4";
    $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
      if($count == 1) {
          echo "<p style=color:red;>Unavailable</p>";
        
      }else {
        echo "<p style=color:green;>Available</p>";
      }
      ?>
  </div>
</div>
</table>

</body>
</html>