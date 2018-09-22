<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");

  /*


&id="+lend_data.id+"
&user_name="+user_data.user_name+"
&user_rfid="+user_data.user_rfid+"
&book_name="+book_data.book_name+"
&book_id="+book_data.book_id+"
&lendtime="+lendtime+"
&endtime="+endtime+"
&remandtime="+remandtime,  
  


  */
  
  $id = $_GET['id']; 
  $user_name = $_GET['user_name']; 
  $user_rfid = $_GET['user_rfid']; 
  $book_name = $_GET['book_name']; 
  $book_isbn = $_GET['book_id']; 
  $user_rfid = $_GET['lendtime']; 
  $lendtime = $_GET['endtime']; 
  $remandtime = $_GET['remandtime']; 


  $result = mysql_query("UPDATE `lend_data` SET `user_name`=\"$user_name\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `lend_data` SET `user_rfid`=\"$user_rfid\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `lend_data` SET `book_name`=\"$book_name\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `lend_data` SET `book_isbn`=\"$book_isbn\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `lend_data` SET `user_rfid`=\"$user_rfid\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `lend_data` SET `lendtime`=\"$lendtime\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `lend_data` SET `remandtime`=\"$remandtime\" where `id` = \"$id\""); // 更新事件時間

  echo 0;