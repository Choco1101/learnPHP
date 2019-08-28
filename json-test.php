
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Store and retrieve data from local storage.</h2>

	<p id="demo"></p>

	<script>

	// var myObj, myJSON, obj, x, y;
	
	// var myObj = [];

		
	<?php 
	// for($y = 0; $y <  $arrlength ; $y++){
	// 	echo "myObj[".$y."] = [];";
	// 	for($x = 0; $x <  $collength ; $x++) {
	// 		$test = "myObj[".$y."][".$x."] = '" . $event_list[$y][$x] . "'; " ;
	// 		echo $test;
	// 	}
	// }
	
	?>

	// console.log(myObj);

	// myJSON = JSON.stringify(myObj);
	// localStorage.setItem("json-test", myJSON);

	// // Retrieving data:
	// text = localStorage.getItem("json-test");
	// obj = JSON.parse(text);
	// document.getElementById("demo").innerHTML = obj[0];

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    myObj = JSON.parse(this.responseText);
    document.getElementById("demo").innerHTML = myObj;
  }
};
xmlhttp.open("GET", "json-php-test.php", true);
xmlhttp.send();
	</script>

</body>
</html>