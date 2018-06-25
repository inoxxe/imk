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
</head>
<body>
<div class="menu">
<?php require_once "header2.php"; ?>
</div>

<div class="wrapper">
<?php
   session_start();

   
  $user = $_SESSION['user'];
  $query = mysqli_query($db, "SELECT * FROM user WHERE nim = '$user' ");
  $session = mysqli_fetch_assoc($query);
    
    $status = $session['status'];
   if(!isset($_SESSION['user'])){
      header("location:index.php");
   }
?>
<div class="sambutan">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">E-Class</h1>
    <p class="lead">Selamat Datang <b><?php echo $session['nama']; ?></b></p>
  </div>
</div>
</div>



<div class="container">

  <?php

if(isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $keperluan = $_POST['keperluan'];
    // include database connection file
    include_once("db.php");
    $sql = "SELECT * FROM kelas WHERE nim = '$nim'";
    $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
        $count = mysqli_num_rows($result);
    
      if($count == 1) {
          echo "<h1 style=color:red;>Anda Sudah Meminjam kelas di minggu ini</h1>";
        
      }else {
         $result = mysqli_query($db, "INSERT INTO kelas(nim,hari,jam,keperluan) VALUES('$nim','$hari','$jam','$keperluan')");
    
    header("location:gedung.php");
      }
    
  }
  ?>
    <div class="informasi">
    <div class="container">
        <div class="row">
        <div class="col-sm-6">
            <div class="sdank">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Pilih Hari
                    </div>
                    <div class="card-body">
                    <form action="" method="post" name="form">
                      <div class="form-group col-md-8">
                          <label for="inputState">Pilih Hari</label>
                          <select <select class="form-control" name="hari" >>
                            <option selected value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                          </select>
                        </div>
                        <div class="form-group col-md-8">
                          <label for="inputState">Pilih Jam</label>
                          <select id="inputState" name="jam" class="form-control">
                            <option value="07.00-09.30" selected>07.00-09.30</option>
                            <option value="07.00-08.40" >07.00-08.40</option>
                            <option value="08.40-10.20" >08.40-10.20</option>
                            <option vlaue="09.30-12.00" >09.30-12.00</option>
                            <option value="10.20-12.00" >10.20-12.00</option>
                            <option value="12.30-14.10" >12.30-14.10</option>
                            <option value="12.30-15.00" >12.30-15.00</option>
                          </select>
                          <div class="form-group">
                          <label for="exampleFormControlTextarea1">Keperluan</label>
                          <textarea name=keperluan class="form-control" id="exampleFormControlTextarea1" rows=""></textarea>
                          </div>
                          <input type="hidden" name="nim" value="<?php echo $user; ?>  " ></br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>    
</form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="sdank">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Status
                    </div>
                    <div class="card-body">
                      <?php

   
    $user = $_SESSION['user'];
  $query = mysqli_query($db, "SELECT * FROM kelas WHERE nim = '$user' ");
  $surat = mysqli_fetch_assoc($query);
   
?>


 <?php
if($status == "ya"){
  echo "<div class='jumbotron'>
  <h2 class='display-4'>UDINUS SEMARANG</h2>
 <h3 style=color:green;>Permintaan Kelas Diterima</h3>
  <p class='lead'>Terima kasih "; ?><?php echo $session['nama']?><?php echo " permintaan peminjaman kelasmu untuk hari";?> <?php echo $surat['hari']?><?php echo " pada jam "; ?><?php echo $surat['jam']?><?php echo " di ruangan"; ?><?php echo $surat['kelas']?></p><?php
  echo "<hr class='my-4'>
  
</div>";

}elseif($status == "tidak"){
  echo "<div class='jumbotron'>
  <h2 class='display-4'>UDINUS SEMARANG</h2>
 <h3 style=color:red;>Permintaan Kelas TIDAK Diterima</h3>
  <p class='lead'>Mohon maaf "; ?><?php echo $session['nama']?><?php echo " permintaan peminjaman kelasmu untuk hari";?> <?php echo $surat['hari']?><?php echo " pada jam "; ?><?php echo $surat['jam']?><?php echo " di ruangan"; ?><?php echo $surat['kelas']?></p><?php
  echo "<hr class='my-4'>
  
</div>";
}else{
  echo "";
}

 ?>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>





</div>

<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>








