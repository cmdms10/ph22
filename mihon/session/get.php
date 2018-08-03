<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Session</title>
	</head>
	<body>
		<?php
			$name = $_GET["name"];
			print $_SESSION[$name];
		?>
		<br>
		<input type="button" value="戻る" onClick="history.back()">
	</body>
</html>
