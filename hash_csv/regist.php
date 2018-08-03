<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8N">
		<link href="./css/style.css" rel="stylesheet" type="text/css" />
		<title></title>
	</head>
	<body>

		<?php
			$f_st = fopen('account.csv','r');
			$postNoList = array();

			while($row = fgetcsv($f_st))
			{
				$postNoList[$row[0]] = $row[1];
			}

			fclose($f_st);

			$f_pt = fopen('account.csv','a');

			$new_id = $_POST["new_id"];
			$new_pass = $_POST["new_pass"];
			$new = array($new_id, $new_pass);

			if($new_id == "" || $new_pass == "")
			{
				print "登録できません<br/>";
				print '<input type="button" value="戻る" onClick="history.back();"/>';
			}else{
				if(!isset($postNoList[$new_id]))
				{
					fputcsv($f_pt, $new);

					print "登録しました<br/>";
					print '<a href="index.html">ホーム</a>';
				}else{
					print "登録済み<br/>";
					print '<input type="button" value="戻る" onClick="history.back();"/>';
				}
			}
			fclose($f_pt)
		?>

	</body>
</html>
