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
                <h3>H7.1</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <?php  
                  include_once("db.php");
                  $kelas = "h7.1";
                  $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
                  $result = mysqli_query($db,$sql);
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $count = mysqli_num_rows($result);
                  if($count == 1) {
                      echo "<p style=color:red;>Unavailable</p>";
                    }else{
                      echo "<a href='input.php?id=";?><?php echo "h7.1'"; ?><?php echo "class='small-box-footer'>Pilih <i class='fa fa-arrow-circle-right'></i></a>";
                      echo "<p style=color:green;>Available</p>";
                    }
                    ?>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>H7.2</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <?php  
                  include_once("db.php");
                  $kelas = "h7.2";
                  $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
                  $result = mysqli_query($db,$sql);
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $count = mysqli_num_rows($result);
                  if($count == 1) {
                      echo "<p style=color:red;>Unavailable</p>";
                    }else{
                      echo "<a href='input.php?id=";?><?php echo "h7.1'"; ?><?php echo "class='small-box-footer'>Pilih <i class='fa fa-arrow-circle-right'></i></a>";
                      echo "<p style=color:green;>Available</p>";
                    }
                    ?>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>H7.3</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <?php  
                  include_once("db.php");
                  $kelas = "h7.3";
                  $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
                  $result = mysqli_query($db,$sql);
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $count = mysqli_num_rows($result);
                  if($count == 1) {
                      echo "<p style=color:red;>Unavailable</p>";
                    }else{
                      echo "<a href='input.php?id=";?><?php echo "h7.1'"; ?><?php echo "class='small-box-footer'>Pilih <i class='fa fa-arrow-circle-right'></i></a>";
                      echo "<p style=color:green;>Available</p>";
                    }
                    ?>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>H7.4</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <?php  
                  include_once("db.php");
                  $kelas = "h7.4";
                  $sql = "SELECT 'kelas','jam','hari' FROM jadwal WHERE kelas = '$kelas' AND jam = '$jam' AND hari = '$hari'  ";
                  $result = mysqli_query($db,$sql);
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $count = mysqli_num_rows($result);
                  if($count == 1) {
                      echo "<p style=color:red;>Unavailable</p>";
                    }else{
                      echo "<a href='input.php?id=";?><?php echo "h7.1'"; ?><?php echo "class='small-box-footer'>Pilih <i class='fa fa-arrow-circle-right'></i></a>";
                      echo "<p style=color:green;>Available</p>";
                    }
                    ?>
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


