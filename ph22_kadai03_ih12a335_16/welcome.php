<?php
	session_start();
	$name = $_POST["name"];
	$_SESSION["sname"] = $name;
	setcookie("name", $name, time() + 180);
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
				print "ようこそ<br/>";
		?>
				<a href="index.php">
					ログイン
				</a>
		<?php
			}else{
				print "ようこそ".$_SESSION["sname"]."さん<br/>";
		?>
				<a href="user.php">
					<?php print $_SESSION["sname"]."さんのページ"; ?>
				</a>
		<?php
			}
		?>
	</body>
</html>
