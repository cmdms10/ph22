<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="regist.php" method="post">
      クラス記号：<input type="text" name="class" value=""><br>
      出席番号：<input type="text" name="no" value=""><br>
      氏名：<input type="text" name="name" value=""><br>
      <input type="submit" name="submit" value="登録">
    </form>

    <p>一覧</p><br>
    <?php
			require_once("db_func.php");
			$students_list = students_list();
			foreach ($students_list as $row) {
				print "{$row["class"]} {$row["no"]} {$row["name"]} <br>";
			}
		?>
  </body>
</html>
