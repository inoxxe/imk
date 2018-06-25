<?php require_once "db.php"; ?>

<?php 
 session_start();
   
  $user = $_SESSION['user'];
	$query = mysqli_query($db, "SELECT * FROM user WHERE nim = '$user' ");
	$session = mysqli_fetch_assoc($query);
   
   if(!isset($_SESSION['user'])){
      header("location:index.php");
   }

$id = $_GET['id'];
$user = $session['nim'];
$query = "UPDATE kelas SET kelas = '$id' WHERE nim = '$user' ";
$update = mysqli_query($db, $query);

if( $update ){
    header('Location: welcome.php');
}

?>