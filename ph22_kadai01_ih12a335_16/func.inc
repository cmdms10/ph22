<?php
  function data($arg){
    $con = mysqli_connect("localhost","root","ponsima1140") or die("接続失敗");
    mysqli_set_charset($con,"utf8");
    mysqli_select_db($con,"ph22_kadai01_ih12a335_16");
    $sql = $arg;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    mysqli_close($con);

    return $row;
  }
?>
