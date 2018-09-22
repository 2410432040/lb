<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $id = $_GET['id']; 
  $table = $_GET['table']; 

  $result = mysql_query("DELETE FROM `$table` where `id` = \"$id\""); // 更新事件時間

  echo 0;