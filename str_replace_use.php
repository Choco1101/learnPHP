<?php 
require_once("tool.php");


echo date('YmdHis');
echo "<br>";
echo substr(date('YmdHis'),2);

	

	$remove_sign = array("." , ":");
	$ip_no			= str_pad(trim(str_replace($remove_sign,"",get_client_ip())),12,"0",STR_PAD_LEFT);
	
	write_log('test.log', 'ip_no: '. $ip_no . "==" . 'ip: ' . get_client_ip());
 ?>