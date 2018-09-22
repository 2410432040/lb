<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $id = $_GET['id']; 
  $user_name = $_GET['user_name']; 
  $user_number = $_GET['user_number']; 
  $user_pwd = $_GET['user_pwd']; 
  $user_email = $_GET['user_email']; 
  $user_call = $_GET['user_call']; 
  $user_position = $_GET['user_position']; 
  $user_department = $_GET['user_department']; 
  $user_program = $_GET['user_program']; 
  $user_credit = $_GET['user_credit']; 
  $user_rfid = $_GET['user_rfid']; 
  $user_addtime = $_GET['user_addtime']; 


/*
id
user_name
user_number
user_pwd
user_email
user_call
user_position
user_department
user_program
user_credit
user_rfid
user_addtime
*/

  $result = mysql_query("UPDATE `user_data` SET `user_name`=\"$user_name\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_number`=\"$user_number\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_pwd`=\"$user_pwd\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_email`=\"$user_email\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_call`=\"$user_call\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_position`=\"$user_position\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_department`=\"$user_department\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_program`=\"$user_program\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_credit`=\"$user_credit\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_rfid`=\"$user_rfid\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `user_data` SET `user_addtime`=\"$user_addtime\" where `id` = \"$id\""); // 更新事件時間

  echo 0;