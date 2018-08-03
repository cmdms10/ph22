<?php
function db_start()
{
  $con = mysqli_connect("localhost","root","ponsima1140") or die("接続失敗");
  mysqli_set_charset($con,"utf8");
  mysqli_select_db($con,"ph22_kadai06_ih12a335_16");
  return $con;
}

function db_connect($login_id,$login_passwd)
{
  $con = db_start();
  $sql = "SELECT id FROM accounts WHERE login_id = ? AND password = ?";
  $stmt = mysqli_prepare($con,$sql);
  mysqli_stmt_bind_param($stmt,'ss',$login_id,$login_passwd);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_array($result);
  mysqli_stmt_close($stmt);
  mysqli_close($con);
  return $row;
}

function db_welcome($check)
{
  $con = db_start();
  $sql = $check;
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  mysqli_close($con);
  return $row;
}

function db_insert($id,$passwd,$name)
{
  $con = db_start();
  $sql = "INSERT INTO accounts (id,login_id,password,name) VALUES (null,?,?,?)";
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, 'sss', $id, $passwd, $name);
	$result = mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
  mysqli_close($con);
  return $result;
}
 ?>
