<?php
  $filename = 'images/'.$_FILES['uploadfile']['name'];
  $isSuccess = move_uploaded_file($_FILES['uploadfile']['tmp_name'], $filename);	// 画像を保存
  if($isSuccess) {
    print $_POST["title"]."<br>";
    print '<img src="'.$filename.'"><br>';
  } else {
    print "アップロード失敗<br>";
    print "</br>";
    print "<a href='./index.html'>アップロード</a>";
  }
 ?>
