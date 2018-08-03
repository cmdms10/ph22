<?php
	session_start();
	$name = $_SESSION["sname"];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<?php
			if(empty($_SESSION["sname"]))
			{
				print "ログインしてください<br/>";
		?>
				<a href="index.php">
					ログイン
				</a>
		<?php
			}else{
				print $name."さんのページです<br/>";
		?>
				<form action="logout.php">
					<input type="submit" value="ログアウト"/>
				</form>
		<?php
			}
		?>

	</body>
</html>
