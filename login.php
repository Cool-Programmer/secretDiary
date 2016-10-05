<?php 
    if (@$_POST['submit']=='Log In') {
        $query = "SELECT * FROM `users_signup` WHERE `email`= '".mysqli_real_escape_string($connection, $_POST['loginEmail'])."' AND `password` = '".md5(md5($_POST['loginEmail'].$_POST['loginPassword']))."' LIMIT 1";
        $qurey_run = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($qurey_run);
        if($row){
           	header('Location: mainpage.php');
        }else {
			$error = 'We could not find a user with that email and password. Please try again.' . $error;
        }
    }
?>