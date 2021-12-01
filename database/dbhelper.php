<?php
require_once('define.php');

function execute($sql){

    //lưu data vào bảng 
    //open
    $connect = new mysqli(HOST, USERNAME,PASSWORD,DATABASE);
    //thêm ,sửa,xóa
    mysqli_query($connect, $sql);
    //close
    mysqli_close($connect);
}

function executeResult($sql,$onlyOne = false){
    //lưu data vào bảng 
    //open
    $connect = new mysqli(HOST, USERNAME,PASSWORD,DATABASE);
    mysqli_set_charset($connect,'utf8');
    //thêm ,sửa,xóa
    $result = mysqli_query($connect,$sql);
    //trả về một mảng 
    if($onlyOne) {
		$data = mysqli_fetch_array($result, 1);
	} else {
		$data = [];
		while(($row = mysqli_fetch_array($result, 1)) != null) {
			$data[] = $row;
		}
	}
    // $data =[];
    // while($row = mysqli_fetch_array($result,1)){
    //     $data[]=$row;
    // }
    mysqli_close($connect);

    return $data;
}

function executeSingleResult($sql){
    //lưu data vào bảng 
    //open
    $connect = new mysqli(HOST, USERNAME,PASSWORD,DATABASE);
    //thêm ,sửa,xóa
    $result = mysqli_query($connect,$sql);
    //trả về một giá trị
    $row = mysqli_fetch_array($result,1);

    // đóng kết nối
    mysqli_close($connect);

    return $row;
}

