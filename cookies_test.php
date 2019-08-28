<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<p id="demo"></p>

	<script>
		document.cookie = " XDEBUG_SESSION=sublime.xdebug; expires=Thu, 18 Dec 2001 12:00:00 UTC; path=/";
		var x = document.cookie;

				document.getElementById("demo").innerHTML = 
		"cookie is " + x;
	</script>
</body>
</html>