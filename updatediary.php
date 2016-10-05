<?php require 'db.php'; ?>
<?php 
session_start();
$query = "UPDATE `users_signup` SET diary='".mysqli_real_escape_string($connection, $_POST['diary'])."'WHERE id='".$_SESSION['id']."'LIMIT 1";
$query_run = mysqli_query($connection, $query);
?>