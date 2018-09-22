<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $result = mysql_query("SELECT lend_data.id,user_data.user_rfid,user_data.user_name,book_data.book_id,book_data.book_name,lendtime,endtime,remandtime,lend_data.status
FROM `user_data`  INNER JOIN 
( `book_data`INNER JOIN `lend_data` ON lend_data.book_id = book_data.book_id) 
ON lend_data.user_rfid = user_data.user_rfid"); // 讀取資料
  $i = 0;


  while($row = mysql_fetch_array($result)){

    $enddate=$row['remandtime'];
    $startdate=date("Y-m-d H:i:s");

    //$date=floor((strtotime($enddate)-strtotime($startdate))/86400);
    //$hour=floor((strtotime($enddate)-strtotime($startdate))%86400/3600);
    //$minute=floor((strtotime($enddate)-strtotime($startdate))%86400/60);
    //$second=floor((strtotime($enddate)-strtotime($startdate))%86400%60);
    if((strtotime($enddate)-strtotime($startdate))>0){ // 正的

      $yo= "借閱";
    }else{
      $yo= "逾期";
    }


  echo "<tr>";
    echo "<td><input type='button' class='btn btn-danger' onclick='updataData(".$row['lend_data.id'].",$(\"#lend_data.status".$i."\").val(),$(\"#user_data.user_name".$i."\").val(),$(\"#user_data.user_rfid".$i."\").val(),$(\"#book_data.book_name".$i."\").val(),$(\"#book_data.book_id".$i."\").val(),$(\"#lendtime".$i."\").val(),,$(\"#endtime".$i."\").val(),,$(\"#remandtime".$i."\").val());' value='修改'>   

     <input type='button' class='btn btn-secondary' onclick='delData(".$row['lend_data.id'].",$(\"#lend_data.status".$i."\").val(),$(\"#user_data.user_name".$i."\").val(),$(\"#user_data.user_rfid".$i."\").val(),$(\"#book_data.book_name".$i."\").val(),$(\"#book_data.book_id".$i."\").val(),$(\"#lendtime".$i."\").val(),,$(\"#endtime".$i."\").val(),,$(\"#remandtime".$i."\").val());'  value='刪除'></td>";
    //echo "<td><type='text' value='".$yo."' /></td>";
    echo "<td> <label>".$yo."</label></td>";
    echo "<td><input name='user_data.user_name".$i."' id='user_data.user_name".$i."'  type='text' value='".$row['user_data.user_name']."'/></td>";
    echo "<td><input name='user_data.user_rfid".$i."' id='user_data.user_rfid".$i."'  type='text' value='".$row['user_data.user_rfid']."'/></td>";
    echo "<td><input name='book_data.book_name".$i."' id='book_data.book_name".$i."'  type='text' value='".$row['book_data.book_name']."' /></td>";
    echo "<td><input name='book_data.book_id".$i."' id='book_data.book_id".$i."'  type='text' value='".$row['book_data.book_id']."'/></td>";
    echo "<td><input name='lendtime".$i."' id='lendtime".$i."'  type='text' value='".$row['lendtime']."'/></td>";
    echo "<td><input name='endtime".$i."' id='endtime".$i."'  type='text' value='".$row['endtime']."'/></td>";
    echo "<td><input name='remandtime".$i."' id='remandtime".$i."'  type='text' value='".$row['remandtime']."'/></td>";

    echo "</tr>";
    $i =  $i + 1;
  }



// http://localhost/hk/server/addData.php?add_rid=3077894083

//INSERT INTO `TCN_table`(`id`, `rid`, `iccard`, `name`, `nickname`, `status`, `time`, `alltime`, `isdel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

