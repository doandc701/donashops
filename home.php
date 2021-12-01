<?php
require_once("./database/dbhelper.php");
require_once("./utils/utility.php");
session_start();
require_once("./database/login.php");
// if(isset($_COOKIE['login']) && $_COOKIE['login'] == 'true') {
//     header("Location: home.php");
// }
login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/share.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <title>신발 가게</title>


    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="main">
        <!-- banner -->
        <div class="banner">
            <?php
            include_once("./layoutshare/banner.php")
            ?>
        </div>
        <!-- slider -->
        <div class="slider">
            <img id="img" src="./assets/image/img_58b8056ebfde3.png" onclick="changeImage()">
        </div>
        <!-- container -->
        <div class="container">
            <h1 class="name">Giày Nam</h1>
            <div class="produce ">
                <!-- giày nam -->
                <?php
                $sql = 'select * from product where product.id_category = 1';
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $sql = "select product.id,product.title,product.original_price,product.price
                          ,product.image from  product 
                           where title like '%$search%' and product.id_category=1";
                }
                $result = executeResult($sql);
                foreach ($result as $sanpham) {
                    echo '<div class="list-item">
                                <div class="item">
                                    <a href="detail.php?id=' . $sanpham['id'] . '">
                                        <img src="/wb_php/uploads/upload/' . $sanpham['image'] . '">
                                        <div class="produce-infor">
                                            <p class="namepr">' . $sanpham['title'] . '</p>
                                            <span class="text-strike">' . number_format($sanpham['original_price'], 0, ',', '.') . '₫</span>
                                            <span class="text-bold">' . number_format($sanpham['price'], 0, ',', '.') . '₫</span>
                                        </div>
                                    </a>
                                </div>
                            </div>';
                }
                ?>
            </div>
            <div class="bonus">
                <a href="#">Xem Thêm >> </a>
            </div>
            <!--giày nữ  -->
            <h1 class="name">Giày Nữ</h1>
            <div class="womenshose produce">
                <?php
                $sql = 'select * from product where product.id_category = 2';
                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $sql = "select product.id,product.title,product.original_price,product.price
                          ,product.image from  product 
                           where title like '%$search%' and product.id_category=2";
                }
                $result = executeResult($sql);
                foreach ($result as $sanpham) {
                    echo '<div class="list-item">
                                <div class="item">
                                    <a href="detail.php?id=' . $sanpham['id'] . '">
                                        <img src="/wb_php/uploads/upload/' . $sanpham['image'] . '">
                                        <div class="produce-infor">
                                            <p class="namepr">' . $sanpham['title'] . '</p>
                                            <span class="text-strike">' . number_format($sanpham['original_price'], 0, ',', '.') . '₫</span>
                                            <span class="text-bold">' . number_format($sanpham['price'], 0, ',', '.') . '₫</span>
                                        </div>
                                    </a>
                                </div>
                            </div>';
                }
                ?>
            </div>
            <div class="bonus">
                <a href="#">Xem Thêm >> </a>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <?php
            include_once('./layoutshare/footer.php');

            ?>
        </div>
        <!-- bản quyền -->
        <div class="copyright">
            <?php
            include_once('./layoutshare/copyright.php');
            ?>
        </div>
        <!-- Login -->
        <div class="limiter">
            <?php
            include_once('./layoutshare/login.php');
            ?>
        </div>

        <script src="./assets/js/showMenu.js"></script>
        <!-- js bootrap -->

        <script src="./assets//css//Domal//vendor//jquery//jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="./assets//css//Domal//vendor//animsition//js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="./assets//css//Domal//vendor//bootstrap//js//popper.js"></script>
        <script src="./assets//css//Domal//vendor//bootstrap//js//bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="./assets//css//Domal//vendor//select2//select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="./assets//css//Domal//vendor//daterangepicker//moment.min.js"></script>
        <script src="./assets//css//Domal//vendor//daterangepicker//daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="./assets//css//Domal//vendor//countdowntime//countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="./assets//css//Domal//js//main.js"></script>

        <!-- JS Showlogin -->
        <script src="./assets/js/showLogin.js"></script>

        <!--Js thay đổi ảnh -->
        <script src="./assets/js/changeimg.js"></script>
</body>

</html>