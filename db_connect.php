<?php 

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



/*// Create connection
$conn = mysqli_connect($Server, $uid, $pwd);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/
 ?>