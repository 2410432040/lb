<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  /* 書籍名稱  作者 ISBN 書籍簡介 書籍卡號
id,
book_name, 
book_isbn,
book_writer,
book_Introduce,
book_id,
book_addid, 
 */

  $book_name = $_GET['book_name']; 
  $book_isbn = $_GET['book_isbn']; 
  $book_writer = $_GET['book_writer']; 
  $book_Introduce = $_GET['book_Introduce']; 
  $book_id = $_GET['book_id']; 

  $result = mysql_query("select * from `book_data` where `book_name` = \"$book_id\""); // 讀取資料
  $row = mysql_fetch_array($result);

  $rid = $row['book_id']; // 讀取卡片
  if(is_null($rid)){ // 判斷卡片是否存在
    $result = mysql_query("INSERT INTO `book_data`(`book_name`, `book_isbn`, `book_writer`, `book_Introduce`,`book_id`) VALUES (\"$book_name\",\"$book_isbn\",\"$book_writer\",\"$book_Introduce\",\"$book_id\")"); // 讀取資料
    echo $result;
  }else{ // 卡片存在讀取訊息
    echo -1;
  }

// http://localhost/hk/server/addData.php?add_rid=3077894083

//INSERT INTO `TCN_table`(`id`, `rid`, `iccard`, `name`, `nickname`, `status`, `time`, `alltime`, `isdel`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])