<!-- <?php require_once ("db.php"); ?>

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
</html> -->


<?php require_once ("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Class</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="asset/mahasiswa/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="asset/mahasiswa/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="asset/mahasiswa/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="asset/mahasiswa/plugins/morris/morris.css">
    <link rel="stylesheet" href="asset/mahasiswa/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="asset/mahasiswa/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="asset/mahasiswa/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="asset/mahasiswa/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<div class="menu">
</div>

<div class="wrapper">
<?php
   
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

<div class="sambutan">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">E-Class</h1>
    <p class="lead">Selamat Datang <b><?php echo $session['nama']; ?></b></p>
  </div>
</div>
</div>





</br>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Pilih Ruangan</h3>
            </div>
            <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>H3.1</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="ruang/h3.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
              <?php  
                  include_once("db.php");
                  $kelas = "h3.1";
                  $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
                  $result = mysqli_query($db,$sql);
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $count = mysqli_num_rows($result);
                  if($count == 1) {
                      echo "<p style=color:red;>Unavailable</p>";
                    }else{
                      echo "<p style=color:green;>Available</p>";
                    }
                    ?>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                 H3.2
                </h3>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="ruang/h4.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>H3.3</h3>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="ruang/h5.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
    
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.4</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.5</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.6</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.7</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.8</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.9</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.10</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.11</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.12</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>H3.13</h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="ruang/h7.php" class="small-box-footer">Pilih <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
           
          </div>
        </div>

      </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

</div>

<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>


