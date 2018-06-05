<?php require_once "db.php"; ?>

<?php 

$id = $_GET['id'];
$status = "tidak";

$query = "UPDATE user SET status = '$status' WHERE nim = '$id' ";
$update = mysqli_query($db, $query);

if( $update ){
    header('Location: index.php');
}

?>