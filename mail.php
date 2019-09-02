<?php 



/*
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "get") {
	$email = test_input($_GET["email"]);


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
*/
// $to = $email;
$to = "clare.chu@tomleemusic.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: clare.chu@tomleemusic.com' . "\r\n";
$headers .= 'Cc: clare.chu@tomleemusic.com' . "\r\n";

mail($to,$subject,$message,$headers);

 ?>


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mail</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
		email: <input type="email">
		<button type="submit">send email</button>
	</form>
</body>
</html>

 -->

