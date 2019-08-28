<?php 

session_start();
	

	$fileToUpload            = (isset($_POST["fileToUpload"])? $_POST["fileToUpload"]: (isset($_GET["fileToUpload"])? $_GET["fileToUpload"]: ""));

	echo $fileToUpload;

 ?>