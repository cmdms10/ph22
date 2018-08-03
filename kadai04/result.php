<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8N">
		<link href="./css/style.css" rel="stylesheet" type="text/css" />
		<title></title>
	</head>
	<body>

		<?php
			$f_pt = fopen('account.csv','r');
			$postNoList = array();

			while($row = fgetcsv($f_pt))
			{
				$postNoList[$row[0]] = $row[1];
			}

			fclose($f_pt);
			$id = $_POST["id"];
			$pass = $_POST["pass"];
		?>

		<?php if(isset($postNoList[$id])): ?>

			<?php if($postNoList[$id] == $pass): ?>

				認証成功<br/>
				<input type="button" value="戻る" onClick="history.back()"/>

			<?php else: ?>

				認証失敗<br/>
				<input type="button" value="戻る" onClick="history.back()"/>

			<?php endif; ?>

		<?php else: ?>

			認証失敗<br/>
			<input type="button" value="戻る" onClick="history.back()"/>

		<?php endif; ?>

	</body>
</html>
