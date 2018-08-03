<?php
	//session_cache_limiter('private_no_expire');
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
			$name = $_POST["name"];
			$value = $_POST["value"];
			$_SESSION[$name] = $value;
		?>
		設定しました。<br>
		<input type="button" value="戻る" onClick="history.back()">
  </body>
</html>
