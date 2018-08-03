<?php
  session_start();
  $id = $_POST["login_id"];
  setcookie("id", $id, time() + 180);

  require_once("db_control.php");
  $row = db_connect($_POST["login_id"],$_POST["login_passwd"]);
  if(empty($row["id"])) {
    header("Location:rogin_error.html");
  }else{
    $_SESSION["sid"] = $row["id"];
    header("Location:welcome.php");
  }
 ?>
