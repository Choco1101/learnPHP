<?php
	session_start();
	
	require_once("../lib/web_server_info.php");
	require_once("../lib/tools.php");

	$email		= (isset($_POST["email"])? $_POST["email"]: (isset($_GET["email"])? $_GET["email"]: ""));
	$form_code	= (isset($_POST["form_code"])? $_POST["form_code"]: (isset($_GET["form_code"])? $_GET["form_code"]: ""));
	$trx_valid 	= false;
	
	$sql=	"select * from apps_eform  where form_code ='" . $form_code . "' and email = '" . $email ."' ";
			
	$connectinfo=array("Database"=>$db,"UID"=>$uid,"PWD"=>$pwd);
	$dbhandle=sqlsrv_connect($Server,$connectinfo) or die("Cannot connect server.");
	
	$result=sqlsrv_query($dbhandle,$sql);
	
	write_log("server.log", $sql);
	
	if (sqlsrv_has_rows($result))	{
		$trx_valid = true;
	} else {
		$trx_valid = false;
	}

	if ($trx_valid)		echo "OOOOKKKK";
	else 				echo "ERROR";
	
?>