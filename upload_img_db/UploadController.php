<?php
  //require_once("Dbmodel.php");
  $filename = 'images/'.$_FILES['uploadfile']['name'];
  $isSuccess = move_uploaded_file($_FILES['uploadfile']['tmp_name'], $filename);	// 画像を保存
  if ($isSuccess) {
      print $_POST["title"]."<br>";
      print '<img src="'.$filename.'"><br>';
      print $filename;
  } else {
      print "アップロード失敗<br>";
      print "</br>";
      print "<a href='./index.html'>アップロード</a>";
  }

  $con = mysqli_connect("localhost", "root", "ponsima1140") or die("接続失敗");
	mysqli_set_charset($con, "utf8");
	mysqli_select_db($con, "ph22_test");
  $sql = "INSERT INTO images (path,name) VALUES($filename,$_POST["title"])"

?>
