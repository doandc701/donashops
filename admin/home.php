<?php
session_start();
if(isset($_COOKIE['home']) && $_COOKIE['home'] ==true){
	header('Location: ../admin/bieudo/index.php');
	die();
}

const HOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "shopgiaylala";

if(!empty($_POST)){
	$username = $_POST['username'];
	$pass = $_POST['pass'];

	// tạo kết nối database
	$connect = new mysqli(HOST, USERNAME,PASSWORD,DATABASE);
	// cho phép PHP lưu unicode
	mysqli_set_charset($connect, "utf8");
	//kiểm tra kết nối có thành công không
	if($connect->connect_error) {
		var_dump($connect->connect_error);
		die();
	}

	// $pass =md5($_POST['pass']);	
	// thực hiện truy vấn dữ liệu insert
	$query ="select * from users where USER_NAME ='".$username."' AND
	 PASSWORD ='".$pass."' ";
	$result= mysqli_query($connect,$query);
	$data =array();
	while($row = mysqli_fetch_array($result,1)){
		$data[]= $row;
	}
	
	// đóng kết nối
	$connect->close();
	if($data !=null && count($data)>0){
		// set cookie
		setcookie("home",'true',time()+7*24*60*60, '/');
		header("Location: ../admin/bieudo/");
	}
}

?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../assets/css/login_admin.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Đăng nhập</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" id="username" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" id="pass" name="pass">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox" >Nhớ mật khẩu
					</div>
					<div class="form-group">
						<input style="min-width: 110px;" type="submit" value="Đăng nhập" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Bạn chưa có tài khoản?<a href="./register.php">Đăng ký</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Quên mật khẩu?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>