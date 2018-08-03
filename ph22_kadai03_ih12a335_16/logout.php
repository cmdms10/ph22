<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="./css/style.css" rel="stylesheet" type="text/css" />
		<title></title>
	</head>
	<body>
		
		<?php
			unset($_SESSION["sname"]);
		?>

		ログアウトしました<br/>
		<a href="index.php">
			ログイン
		</a>
	</body>
</html>
