<?php
  error_reporting(0); 
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $rID = $_GET[rID]; // 取得RFID號碼

  $result = mysql_query("select * from `user_data` where `user_rfid` = \"$rID\""); // 讀取資料
  $row = mysql_fetch_array($result);

  $rid = $row['user_rfid']; // 讀取卡片

  if(is_null($rid)){ // 判斷卡片是否存在
    echo "null"; // 卡片不存在
  }else{ // 卡片存在讀取訊息
    $nowtime = time(); // 時間戳
    $nickname = $row['user_name']; // 讀取暱稱
    $status = $row['status']; // 讀取目前狀態

    if($status=="in"){ // 更改進出狀態
      $status = "out";
    }else{
      $status = "in";
    }

    //更新數據
    $result = mysql_query("UPDATE `user_data` SET `status`=\"$status\" where `user_rfid` = \"$rid\""); // 更新進出狀態
  /*  if($status == "out"){ // 當狀態是離開會場
      $alltime = $row['alltime']+($nowtime-$row[time]); // 入場總時數=累積時間+(這次離場時間-上次進場時間)
      $result = mysql_query("UPDATE `TCN_table` SET `alltime`=\"$alltime\" where `rid` = \"$rid\""); // 更新總時間
    }
    
    //更新事件時間
    $result = mysql_query("UPDATE `TCN_table` SET `time`=\"$nowtime\" where `rid` = \"$rid\""); // 更新事件時間
*/
    echo $status.','.$nickname;

  }


  


//INSERT INTO `TCN_table`(`id`, `rid`, `iccard`, `name`, `nickname`, `status`, `time`, `alltime`, `isdel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])