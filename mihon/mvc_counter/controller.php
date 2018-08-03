<?php
require_once("model.php");

// ①ファイルからカウント値を読み込む
$count = getCount();
// ②カウント値をビューに渡す
$_POST["count"] = $count;
// ③カウンタ値をファイルに書き込む
setCount($count);

require_once("view.php");
?>
