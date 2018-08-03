<?php
  $filename = 'docs/'.$_FILES['uploadfile']['name']; //保存ファイル名
  $isSuccess = move_uploaded_file($_FILES['uploadfile']['tmp_name'],$filename);

  if($isSuccess){
    print "アップロード成功<br>";
    //テキスト内容を出力
    $f_pt = fopen($filename,'r');
    while ($str = fgets($f_pt)) {
      print $str."<br>";
    }
    fclose($f_pt);
  }else {
    print "アップロード失敗<br>";
  }
 ?>
