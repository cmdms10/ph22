<?php
	$name = $_POST["name"];
	$value = $_POST["value"];
	setcookie($name, $value, time()+180);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cookie</title>
	</head>
	<body>
		設定しました。<br>
		<input type="button" value="戻る" onClick="history.back()">
	</body>
</html>
