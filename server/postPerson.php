<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $result = mysql_query("select * from `user_data` where `status` = \"In\""); // 讀取資料

  $num=mysql_num_rows($result);

  echo ($num);