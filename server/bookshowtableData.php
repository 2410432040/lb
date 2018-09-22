<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $result = mysql_query("select * from `book_data`"); // 讀取資料
  $i = 0;


  while($row = mysql_fetch_array($result)){

  
/*
id
book_name 
book_isbn
book_writer
book_Introduce
book_id
book_addid 
*/

    echo "<tr>";
    echo "<td><input type='button' class='btn btn-danger' onclick='updataData(".$row['id'].",$(\"#book_name".$i."\").val(),$(\"#book_isbn".$i."\").val(),$(\"#book_writer".$i."\").val(),$(\"#book_Introduce".$i."\").val(),$(\"#book_id".$i."\").val(),$(\"#book_addid".$i."\").val());' value='修改'>    <input type='button' class='btn btn-secondary' onclick='delData(".$row['id'].",$(\"#book_name".$i."\").val(),$(\"#book_id".$i."\").val());' value='刪除'></td>";
    //echo "<td><type='text' value='".$yo."' /></td>";
    echo "<td><input name='book_name".$i."' id='book_name".$i."'  type='text' value='".$row['book_name']."'/></td>";
    echo "<td><input name='book_writer".$i."' id='book_writer".$i."'  type='text' value='".$row['book_writer']."'/></td>";
    echo "<td><input name='book_isbn".$i."' id='book_isbn".$i."'  type='text' value='".$row['book_isbn']."'/></td>";
    echo "<td><input name='book_Introduce".$i."' id='book_Introduce".$i."'  type='text' value='".$row['book_Introduce']."' /></td>";
    echo "<td><input name='book_id".$i."' id='book_id".$i."'  type='text' value='".$row['book_id']."'/></td>";
    echo "<td><input name='book_addid".$i."' id='book_addid".$i."'  type='text' value='".$row['book_addid']."'/></td>";
    echo "</tr>";
    $i =  $i + 1;
  }




// http://localhost/hk/server/addData.php?add_rid=3077894083

//INSERT INTO `TCN_table`(`id`, `rid`, `iccard`, `name`, `nickname`, `status`, `time`, `alltime`, `isdel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

