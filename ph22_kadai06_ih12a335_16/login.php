<?php
  if(isset($_COOKIE["id"]))
  {
    $id = $_COOKIE["id"];
  }else{
    $id = "";
  }
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="login_check.php" method="post">
      ログインID：<input type="text" name="login_id" value="<?php print $id ?>"><br>
      パスワード：<input type="password" name="login_passwd"><br>
      <input type="submit" value="ログイン">
    </form>
    <a href="./index.html">メニュー</a>
  </body>
</html>
