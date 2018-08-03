<?php
  session_start();
  require_once("LoginModel.php");
  $_POST["login_message"] = getMsg();
  require_once("login.php");
 ?>
