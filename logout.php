<?php require 'db.php'; ?>

<?php
	session_destroy();
	header('Location: index.php')
?>