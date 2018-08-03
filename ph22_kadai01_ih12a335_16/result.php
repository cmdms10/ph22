<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once("./func.inc");

      $sql = "SELECT name FROM account WHERE id ='{$_POST["user_id"]}' and password = '{$_POST["pswd"]}'";
      $row = data($sql);

      if ($row["name"] != "") {
        print "こんにちは、".htmlspecialchars($row["name"],ENT_QUOTES,"UTF-8")."さん";
        print "<form action='index.html' method='post'> <input type='submit' value='ログアウト'>";
      }else{
        print "IDまたはパスワードを見直してください";
        print "<form action='index.html' method='post'> <input type='submit' value='戻る'>";
      }
    ?>
  </body>
</html>
