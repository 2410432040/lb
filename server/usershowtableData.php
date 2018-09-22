<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $result = mysql_query("select * from `user_data`"); // 讀取資料
  $i = 0;


  while($row = mysql_fetch_array($result)){

  
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








    echo "<tr>";
    echo "<td><input type='button' class='btn btn-danger' onclick='updataData(".$row['id'].",$(\"#user_name".$i."\").val(),$(\"#user_number".$i."\").val(),$(\"#user_pwd".$i."\").val(),$(\"#user_email".$i."\").val(),$(\"#user_call".$i."\").val(),$(\"#user_position".$i."\").val(),$(\"#user_department".$i."\").val(),$(\"#user_program".$i."\").val(),$(\"#user_credit".$i."\").val(),$(\"#user_rfid".$i."\").val(),$(\"#user_addtime".$i."\").val());' value='修改'>    <input type='button' class='btn btn-secondary' onclick='delData(".$row['id'].",$(\"#user_name".$i."\").val(),$(\"#user_number".$i."\").val());' value='刪除'></td>";
    //echo "<td><type='text' value='".$yo."' /></td>";
    echo "<td><input name='user_rfid".$i."' id='user_rfid".$i."'  type='text' value='".$row['user_rfid']."'/></td>";
    echo "<td><input name='user_name".$i."' id='user_name".$i."'  type='text' value='".$row['user_name']."'/></td>";
    echo "<td><input name='user_number".$i."' id='user_number".$i."'  type='text' value='".$row['user_number']."'/></td>";
    echo "<td><input name='user_pwd".$i."' id='user_pwd".$i."'  type='text' value='".$row['user_pwd']."'/></td>";
    echo "<td><input name='user_email".$i."' id='user_email".$i."'  type='text' value='".$row['user_email']."' /></td>";
    echo "<td><input name='user_call".$i."' id='user_call".$i."'  type='text' value='".$row['user_call']."'/></td>";
    echo "<td><input name='user_position".$i."' id='user_position".$i."'  type='text' value='".$row['user_position']."'/></td>";
    echo "<td><input name='user_department".$i."' id='user_department".$i."'  type='text' value='".$row['user_department']."'/></td>";
    echo "<td><input name='user_program".$i."' id='user_program".$i."'  type='text' value='".$row['user_program']."'/></td>";
    echo "<td><input name='user_credit".$i."' id='user_credit".$i."'  type='text' value='".$row['user_credit']."'/></td>";
    echo "<td><input name='user_addtime".$i."' id='user_addtime".$i."'  type='text' value='".$row['user_addtime']."'/></td>";



    echo "</tr>";
    $i =  $i + 1;
  }




// http://localhost/hk/server/addData.php?add_rid=3077894083

//INSERT INTO `TCN_table`(`id`, `rid`, `iccard`, `name`, `nickname`, `status`, `time`, `alltime`, `isdel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

