<?php
  if(preg_match("/^[a-zA-Z0-9]+$/",$_POST["str"])){
    print "OK<br>";
  }else{
    print "NG<br>";
  }
 ?>

 <?php
 if(preg_match("/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{4}$/",$_POST["tel"])){
   print "電話番号：".$_POST["tel"]."<br>";
 }else {
   print "電話番号：エラー<br>";
 }
  ?>

<?php
  if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$_POST["no"])) {
    print "郵便番号：".$_POST["no"]."<br>";
  }else {
    print "郵便番号：エラー<br>";
  }
 ?>
