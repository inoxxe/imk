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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.1</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.1";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.2</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.2";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.3</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.3";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.4</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.4";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.5</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.5";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.6</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.6";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.7</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.7";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.8</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.8";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.9</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.9";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.10</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.10";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.11</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.11";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.12</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.12";
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
    <a href="input.php?id=<?php echo "h3.1"; ?>"><h5 class="card-title">H3.13</h5></a>
    <?php  
    include_once("db.php");
    $kelas = "h3.13";
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