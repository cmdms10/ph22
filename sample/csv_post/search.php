<?php
 $f_pt = fopen('post_no.csv','r');
 $postNoList = array();
 while($row = fgetcsv($f_pt)){
   $postNoList[$row[0]] = $row[1];
 }
 fclose($f_pt);

 $post_no = $_POST["post_no"];
 print $post_no;

 if(isset($postNoList[$post_no])){
   print " ".$postNoList[$post_no];
 }else{
   print "データが見つかりません";
 }
 ?>
