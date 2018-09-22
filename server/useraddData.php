<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
 /*
姓名      學號/職員編號 密碼      信箱        手機      職稱          科系/單位       年制          信用值      人員卡號  加入時間
user_name user_number   user_pwd  user_email  user_call user_position user_department user_program  user_credit user_rfid user_addtime

*/
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

  $result1 = mysql_query("select * from `user_data` where `user_rfid` = \"$user_rfid\""); // 讀取資料
  $row1 = mysql_fetch_array($result1);
  $result2 = mysql_query("select * from `user_data` where `user_number` = \"$user_number\""); // 讀取資料
  $row2 = mysql_fetch_array($result2);

  $rid = $row1['user_rfid']; // 讀取卡片
  $unr = $row2['user_number'];


  if(is_null($rid)&is_null($unr)){ // 判斷卡片是否存在
    $result = mysql_query("INSERT INTO `user_data`(`user_name`, `user_number`, `user_pwd`, `user_email`,`user_call`,`user_position`,`user_department`,`user_program`,`user_credit`,`user_rfid`) VALUES (\"$user_name\",\"$user_number\",\"$user_pwd\",\"$user_email\",\"$user_call\",\"$user_position\",\"$user_department\",\"$user_program\",\"$user_credit\",\"$user_rfid\")"); // 讀取資料
    echo $result;
  }else{ // 卡片存在讀取訊息
    echo -1;
  }

// http://localhost/hk/server/addData.php?add_rid=3077894083

//INSERT INTO `TCN_table`(`id`, `rid`, `iccard`, `name`, `nickname`, `status`, `time`, `alltime`, `isdel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])