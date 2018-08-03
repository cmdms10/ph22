<?php
  session_start();
  function getMsg() {
    $msg = "";
    if(isset($_SESSION["login_message"])) {
      $msg = $_SESSION["login_message"];
      unset($_SESSION["login_message"]);
    }
    return $msg;
  }
  ?>
