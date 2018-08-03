<?php
  $con = mysqli_connect("localhost","root","ponsima1140") or die("接続失敗");
  mysqli_set_charset($con,"utf8");
  mysqli_select_db($con,"ph22_kadai06_ih12a335_16");
  $sql = "INSERT INTO images (path,name) VALUES($filename,$_POST["title"])"

?>
