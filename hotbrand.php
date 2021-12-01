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
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <title>신발 가게</title>
    <link rel="stylesheet" href="./assets/css/hotbrand.css">
    <link rel="stylesheet" href="./assets/css/share.css">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/css/main.css">
    <!--===============================================================================================-->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!--===============================================================================================-->


</head>

<body>
    <div class="main">
        <div class="banner">
            <?php
            include_once("./layoutshare/banner.php")
            ?>
        </div>
        <!-- container -->
        <div class="container">
            <div class="preamble">
                <h1 style="line-height:50px;">Khám phá nguồn cảm hứng hàng ngày từ cộng đồng của chúng tôi.
                    Lướt để trải nghiệm và mua sắm các phong cách mới nhất đang thịnh hành.</h1>
            </div>
            <div class="list_brand">
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/air-force-1-shadow-spruce-aura_hotbrand1.jpg" alt="">
                            <h5 class="text_brand">Nike Air Force 1 Shadow Spruce Aura</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/yeezy-700-og_hot brand2.jpg" alt="">
                            <h5 class="text_brand">Yeezy Boost 700 Magnet</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/ba-lo-sprayground-game-over-shark-e1284-7_hot brand3.jpg" alt="">
                            <h5 class="text_brand">Sprayground Game Over Shark</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/mlb-boston_hot brand4.jpg" alt="">
                            <h5 class="text_brand">MLB BigBall Chunky P Boston Red Sox</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/air-jordan-1-low-unc_hot_brand5.jpg" alt="">
                            <h5 class="text_brand">Air Jordan 1 Low “UNC”</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/131098965_1022958318187317_7986126822958593339_o-900x1200_bot brand6.jpg" alt="">
                            <h5 class="text_brand">Air Jordan 1 Mid Shattered Backboard</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/air-jordan-1-low-unc-1-900x1200_hot brand7.jpg" alt="">
                            <h5 class="text_brand">Air Jordan 1 Low “UNC”</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/air-jordan-1-mid-chicago-black-toe-900x1202_hot brand 8.jpg" alt="">
                            <h5 class="text_brand">Air Jordan 1 Mid Chicago Black Toe</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/air-jordan-1-low-fuchsia_hot brand 0.jpg" alt="">
                            <h5 class="text_brand">Air Jordan 1 Low Fuchsia</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/air-jordan-1-lucky-green-900x1109_hot brand 10.jpg" alt="">
                            <h5 class="text_brand">Air Jordan 1 Retro High OG Lucky Green</h5>
                        </a>
                    </div>
                </div>
                <div class="brand">
                    <div class="product">
                        <a href="">
                            <img src="./assets/image/sp/130497158_1319656281733636_1938200092339231088_o-768x1256_hot brand 11.jpg" alt="">
                            <h5 class="text_brand">Air Jordan 1 Mid SE Multicolor</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <?php
            include_once("./layoutshare/footer.php");
            ?>
        </div>
        <div class="copyright">
            <?php
            include_once("./layoutshare/copyright.php");
            ?>
        </div>
    </div>
    <!-- Login -->
    <div class="limiter">
        <?php
        include_once('./layoutshare/login.php');
        ?>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

     <!-- showMenu -->
     <script src="./assets/js/showMenu.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script src="./assets/css/Domal/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/css/Domal/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/css/Domal/vendor/bootstrap/js/popper.js"></script>
    <script src="./assets/css/Domal/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/css/Domal/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/css/Domal/vendor/daterangepicker/moment.min.js"></script>
    <script src="./assets/css/Domal/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/css/Domal/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/css/Domal/js/main.js"></script>

    <!-- Showlogin -->
    <script>
        const Logins = document.querySelectorAll('.js-log')
        const modal = document.querySelector('.limiter')
        const modalContent = document.querySelector('.js-container')

        function showLogin() {
            modal.classList.add('open')
        }

        function hideLogin() {
            modal.classList.remove('open')
        }
        for (const Login of Logins) {

            Login.addEventListener('click', showLogin);
        }
        modal.addEventListener('click', hideLogin)
        modalContent.addEventListener('click', function(event) {
            event.stopPropagation()
        })
    </script>

    <!-- animation -->

</body>

</html>