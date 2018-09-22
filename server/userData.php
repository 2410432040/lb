<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $result = mysql_query("select * from `user_data`"); // 讀取資料
  $i = 0;
  while($row = mysql_fetch_array($result)){
    echo "<tr>";
    echo "<td><input type='text' value='".$row['user_rfid']."' /></td>";
    echo "<td><input type='text' value='".$row['user_name']."'/></td>";
    echo "<td><input type='text' value='".$row['user_number']."'/></td>";
    echo "<td><input type='text' value='".$row['user_pwd']."'/></td>";
    echo "<td><input type='text' value='".$row['user_email']."' /></td>";
    echo "<td><input type='text' value='".$row['user_call']."'/></td>";
    echo "<td><input type='text' value='".$row['user_position']."' /></td>";
    echo "<td><input type='text' value='".$row['user_department']."'/></td>";
    echo "<td><input type='text' value='".$row['user_program']."' /></td>";
    echo "<td><input type='text' value='".$row['user_credit']."'/></td>";
    echo "<td><input type='text' value='".$row['user_addtime']."'/></td>";
    echo "</tr>";
    $i =  $i + 1;
  }





// http://localhost/hk/server/addData.php?add_rid=3077894083

//INSERT INTO `TCN_table`(`id`, `rid`, `iccard`, `name`, `nickname`, `status`, `time`, `alltime`, `isdel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

