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
			ユーザーID：
			<input type="text" name="name" value="<?php print $name; ?>"/><br/>
			パスワード：
			<input type="password" name="value"/><br/>
			<input type="submit" value="サインイン"/>
		</form>
	</body>
</html>
