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
			$_SESSION = array();
		?>
		すべて削除しました。<br>
		<input type="button" value="戻る" onClick="history.back()">
  </body>
</html>
