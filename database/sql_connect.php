<?php
require_once("./database/define.php");

  // tạo kết nối database
  $connect = new mysqli(HOST, USERNAME,PASSWORD,DATABASE);
  // cho phép PHP lưu unicode
  mysqli_set_charset($connect, "utf8");
  //kiểm tra kết nối có thành công không
  if($connect->connect_error) {
      var_dump($connect->connect_error);
      die();
  }

 
