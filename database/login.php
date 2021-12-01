<?php
function login(){
    if(!empty($_POST)){
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);

        // tạo kết nối database
        require_once("./database/sql_connect.php");
        // thực hiện truy vấn dữ liệu insert
        $query ="select * from users where EMAIL ='".$email."' AND
         PASSWORD ='".$pass."' ";
        $result= mysqli_query($connect,$query);
        $data =array();
        while($row = mysqli_fetch_array($result,1)){
            $data[]= $row;
        }
        
        // đóng kết nối
        require_once("./database/sql_close.php");
        if($data !=null && count($data)>0){
            // setcookie('login','true',time()+7*24*60, '/');
            echo'<script>
                    alert("Chào mừng bạn đến với DONA shop");
                </script>';
            header("Location: home.php");
        }
        else{
            echo '<script>
                    alert("Email hoặc mật khẩu không đúng!");
                </script>';
        }
    }
}