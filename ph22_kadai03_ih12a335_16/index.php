<?php
	if(isset($_COOKIE["name"]))
	{
		$name = $_COOKIE["name"];
	}else{
		$name = "";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>トップページ</title>
	</head>
	<body>
		<form method="post" action="welcome.php">
			ユーザー名：
			<input type="text" name="name" value="<?php print $name; ?>"/><br/>
			<input type="submit" value="ログイン"/>
		</form>
	</body>
</html>


