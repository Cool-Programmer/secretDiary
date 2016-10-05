<?php
	if (@$_POST['submit']=='Sign Up') {
		global $error;
		if (!$_POST['email']) {
			$error.='<br>Please enter your email.';
		}else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$error.='<br>Please enter a valid email.';
		}

		if (!$_POST['password']) {
			$error.='<br>Please enter your password.';
		}else {
			if (strlen($_POST['password'])<8) {
				$error.='<br>Please enter a password with at least 8 characters.';
			}
			if (!preg_match('`[A-Z]`', $_POST['password'])) {
				$error.='<br>Please enter a password with at least 1 capital letter.';
			}
		}

		if ($error) {
			$error = "<strong>There were error(s) in your signup details: </strong>" . $error;
		}else {
			$email = $_POST['email'];
			$email_escaped = mysqli_real_escape_string($connection, $email);
			$password = $_POST['password'];
			$password_hashed = md5($password);
			$query = "SELECT * FROM `users_signup` WHERE `email` = '".$email_escaped."' ";
			$result = mysqli_query($connection, $query);
			$results = mysqli_num_rows($result);
			if ($results) {
				$error = "That email address is already registered. Do you want to log in?" . $error;
			}else {
				$query = "INSERT INTO `users_signup` (`email`, `password`) VALUES('".mysqli_real_escape_string($connection,
                $_POST['email'])."','".md5(md5($_POST['email'].$_POST['password']))."')";
				$qurey_run = mysqli_query($connection, $query);
					$success = "You've been signed up.";
				$_SESSION['id']=mysqli_insert_id($connection);	
				header('Location: mainpage.php');					
			}
		}
	}
?>