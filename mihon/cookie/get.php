<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cookie</title>
	</head>
	<body>
		<?php
			$name = $_GET["name"];
			print $_COOKIE[$name]."<br>";
		?>
		<input type="button" value="戻る" onClick="history.back()">
  </body>
</html>
