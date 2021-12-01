<?php
function register() {
    if(!empty($_POST)){
        $tendangnhap = $_POST['tendangnhap'];
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];
        $nhaplaimk = $_POST['nhaplaimk'];

        // mở kết nối
        require_once("./database/sql_connect.php");

        $matkhau =md5($matkhau);
        $nhaplaimk =md5($nhaplaimk);
        // thực hiện truy vấn dữ liệu insert
        $query ="Insert into users(USER_NAME,
        EMAIL,PASSWORD,CONFIRM_PASSWORD)
         VALUES('".$tendangnhap."','".$email."','".$matkhau."',
         '".$nhaplaimk."')";

         mysqli_query($connect,$query);
         //đóng kết nối
        require_once("./database/sql_close.php");
         header("Location: home.php");
    }
}