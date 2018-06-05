<?php require_once "db.php"; ?>

<?php 

$id = $_GET['id'];
$status = "";
$query = "UPDATE user SET status = '$status' WHERE nim = '$id' ";
$update = mysqli_query($db,$query);
$query = "DELETE FROM kelas WHERE nim = '$id' ";
$delete = mysqli_query($db, $query);

if( $delete ){
    header('Location: index.php');
}

?>