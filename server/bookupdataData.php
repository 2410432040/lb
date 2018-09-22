<?php
  include_once("connect.php");
  date_default_timezone_set("Asia/Taipei");
  
  $id = $_GET['id']; 
  $book_name = $_GET['book_name']; 
  $book_isbn = $_GET['book_isbn']; 
  $book_writer = $_GET['book_writer']; 
  $book_Introduce = $_GET['book_Introduce']; 
  $book_id = $_GET['book_id']; 
  $book_addid = $_GET['book_addid']; 


/*
id
book_name 
book_isbn
book_writer
book_Introduce
book_id
book_addid 
*/
  $result = mysql_query("UPDATE `book_data` SET `book_name`=\"$book_name\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `book_data` SET `book_isbn`=\"$book_isbn\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `book_data` SET `book_writer`=\"$book_writer\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `book_data` SET `book_Introduce`=\"$book_Introduce\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `book_data` SET `book_id`=\"$book_id\" where `id` = \"$id\""); // 更新事件時間
  $result = mysql_query("UPDATE `book_data` SET `book_addid`=\"$book_addid\" where `id` = \"$id\""); // 更新事件時間

  echo 0;