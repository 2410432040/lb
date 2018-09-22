<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $result = mysql_query("select * from `book_data`"); // 讀取資料
  $i = 0;
  while($row = mysql_fetch_array($result)){
    echo "<tr>";
    echo "<td><input type='button' class='btn btn-danger' onclick='updataData(".$row['id'].",$(\"#user_name".$i."\").val(),$(\"#user_rfid".$i."\").val(),$(\"#book_name".$i."\").val(),$(\"#book_isbn".$i."\").val(),$(\"#user_rfid".$i."\").val(),$(\"#lendtime".$i."\").val(),$(\"#remandtime".$i."\").val());' value='修改'>    <input type='button' class='btn btn-secondary' onclick='delData(".$row['id'].",$(\"#user_name".$i."\").val(),$(\"#book_name".$i."\").val());' value='刪除'></td>";
    echo "<td><input type='text' value='".$row['book_name']."' /></td>";
    echo "<td><input type='text' value='".$row['book_writer']."'/></td>";
    echo "<td><input type='text' value='".$row['book_isbn']."'/></td>";
    echo "<td><input type='text' value='".$row['book_Introduce']."'/></td>";
    echo "<td><input type='text' value='".$row['book_id']."' /></td>";
    echo "<td><input type='text' value='".$row['book_addid']."'/></td>";

    echo "</tr>";
    $i =  $i + 1;
  }





// http://localhost/hk/server/addData.php?add_rid=3077894083

//INSERT INTO `TCN_table`(`id`, `rid`, `iccard`, `name`, `nickname`, `status`, `time`, `alltime`, `isdel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

