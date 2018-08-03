<?php
	$value = $_POST["name"];
	setcookie("name", $value, time() + 180);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="index.php">
			<p>ようこそ</p><br/>
			<input type="submit" value="戻る"/>
		</form>
	</body>
</html>
