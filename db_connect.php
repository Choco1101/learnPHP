<?php 
require_once("tool.php");
	// phpinfo();
	$Server="WSN-IT15\SQLEXPRESS";
	$db="test";
	$uid="";
	$pwd="";

	// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>$db);
$conn = sqlsrv_connect( $Server, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}



	
		$name_c			= (isset($_POST["name_c"])? $_POST["name_c"]: (isset($_GET["name_c"])? $_GET["name_c"]: ""));

		$tel            = (isset($_POST["tel"])? $_POST["tel"]: (isset($_GET["tel"])? $_GET["tel"]: ""));
		$email          = (isset($_POST["email"])? $_POST["email"]: (isset($_GET["email"])? $_GET["email"]: ""));
		$tutor_code     = (isset($_POST["tutor_code"])? $_POST["tutor_code"]: (isset($_GET["tutor_code"])? $_GET["tutor_code"]: ""));

		$qualification  = (isset($_POST["qualification"])? $_POST["qualification"]: (isset($_GET["qualification"])? $_GET["qualification"]: ""));
		$fileToUpload    = (isset($_POST["fileToUpload"])? $_POST["fileToUpload"]: (isset($_GET["fileToUpload"])? $_GET["fileToUpload"]: ""));

		$select_section = (isset($_POST["select_section"])? $_POST["select_section"]: (isset($_GET["select_section"])? $_GET["select_section"]: ""));


		$amount         = (isset($_POST["amount"])? $_POST["amount"]: (isset($_GET["amount"])? $_GET["amount"]: "1"));
		$qty			= (isset($_POST["qty"])? $_POST["qty"]: (isset($_GET["qty"])? $_GET["qty"]: "1"));

		$invoice		= (isset($_POST["invoice"])? $_POST["invoice"]: (isset($_GET["invoice"])? $_GET["invoice"]: ""));
		$password		= (isset($_POST["password"])? $_POST["password"]: (isset($_GET["password"])? $_GET["password"]: ""));

		$company = '1';
		$form_code = '2';
		$title1 = '3';

		$sql =	"insert into apps_eform (company,form_code,title,name_c,tel";
		$sql .= ",email,text1,select_section,qty,amount,invoice,password";
		$sql .= ",text2,longtext1";		
		// $sql .= ",text2,text3,text4,text5,text6,text7";
		$sql .= ",status,ip_address) values (";
			
		$sql .= " '" . $company         . "' ";
		$sql .= ",'" . $form_code       . "' ";
		$sql .= ",'" . mb_convert_encoding($title1,"big5","utf-8") 	. "' ";
		$sql .= ",'" . mb_convert_encoding($name_c,"big5","utf-8")	. "' ";
		$sql .= ",'" . mb_convert_encoding($tel			,"big5","utf-8"). "' ";

		$sql .= ",'" . $email           . "' ";
		$sql .= ",'" . mb_convert_encoding($tutor_code   ,"big5","utf-8")  . "' ";

		$sql .= ",'" . $select_section	. "' ";
		$sql .= ",'" . $qty	. "' ";

		$sql .= ", " . $amount			. "  ";
		$sql .= ",'" . $invoice         . "' ";
		$sql .= ",'" . $password        . "' ";
		$sql .= ",'" . mb_convert_encoding($qualification   ,"big5","utf-8")  . "' ";
		$sql .= ",'" . mb_convert_encoding($fileToUpload    ,"big5","utf-8")  . "' ";
		// $sql .= ",'" . ""  . "' ";
		// $sql .= ",'" . ""  . "' ";
		// $sql .= ",'" . ""  . "' ";
		// $sql .= ",'" . ""  . "' ";
		// $sql .= ",'" . ""  . "' ";
		// $sql .= ",'" . ""  . "' ";
		$sql .= ",'" . "New"."','".get_client_ip()."')";

		write_log("server.log", $sql);
		$insert_flag = sqlsrv_query( $conn, $sql);
		if ($insert_flag === false)	{
  		   die( print_r( sqlsrv_errors(), true));

			
		}

 ?>