<?php
  require_once("db_control.php");
  
  $error = header("Location:regist_error.html");

  if (preg_match("/^[a-zA-Z0-9]{3,10}$/",$_POST["add_id"]) && preg_match("/^[a-zA-Z0-9]{3,10}$/",$_POST["add_passwd"]) && preg_match("/^.{1,20}+$/",$_POST["add_name"])) {
    $regist = db_insert($_POST["add_id"],$_POST["add_passwd"],$_POST["add_name"]);
  }else {
    $error;
  }

  if(empty($regist)){
    $error;
    //echo "error";
  }else {
    header("Location:regist_success.html");
    //echo "ok";
  }
 ?>
