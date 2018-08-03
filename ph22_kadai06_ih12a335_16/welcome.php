<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(empty($_SESSION["sid"])) {
        print "ログインしてください<br>";
        print "<a href = './login.php'>ログイン</a><br>";
        print "<a href = './index.html'>メニュー</a>";
      }else{
        $sql = "SELECT name FROM accounts WHERE id = '{$_SESSION["sid"]}'";
        require_once("db_control.php");
        $row = db_welcome($sql);
        print "ようこそ、".$row["name"]."さん<br>";
        print "<a href = 'logout.php'>ログアウト</a><br>";
        print "<a href = 'index.html'>メニュー</a>";
      }
     ?>
  </body>
</html>
