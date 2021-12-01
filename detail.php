<?php
require_once('./database/dbhelper.php');
require_once('./utils/utility.php');

$id = getGet('id');
$product = executeResult('select * from product where id = ' . $id, true);
if ($product == null) {
    header('Location: detail.php');
    die();
}
session_start();
require_once("./database/login.php");
login();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <link rel="stylesheet" href="./assets/css/detail.css">
    <link rel="stylesheet" href="./assets/css/share.css">
    <link href="./assets/css/popup.css" rel="stylesheet">
    <script defer src="./assets/js/popUp.js"></script>
    <title>신발 가게</title>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/css/main.css">



    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>

</head>

<body>
    <div class="main">
        <!-- banner -->
        <div class="banner">
            <?php
            include_once('./layoutshare/banner.php');
            ?>
        </div>
        <!-- container -->
        <div class="container">
            <div class="detailproduce">
                <div class="sp">
                    <!-- image -->
                    <div class="imgproduce">
                        <img src="/wb_php/uploads/upload/<?= $product['image'] ?>">
                    </div>
                    <!-- imagechild -->
                    <div class="list-img">
                        <?php
                        $id = getGet('id');
                        $sql = 'SELECT * FROM imagechild WHERE imagechild.id_product =' . $id;
                        $result = executeResult($sql);
                        foreach ($result as $detail) {
                            echo '<div class="imgchild">
                                        <img src="/wb_php/uploads/upload/imagechild/' . $detail['image'] . '">
                                    </div>';
                        }
                        ?>
                    </div>
                </div>
                <!-- indexing -->
                <div class="parameter">
                    <div class="nav">
                        <a style="font-size:16px;
                            text-transform:capitalize;" href=""><?= $product['indexing'] ?> / <?= $product['title'] ?> </a>
                    </div>
                    <div class="summary-top">
                        <h1 class="namesp"><?= $product['title'] ?></h1>
                        <bdi>
                            <span class="price"><?= number_format($product['price'], 0, ',', '.') ?>₫</span>
                        </bdi>
                        <!-- ưu đãi -->
                        <div class="endow">
                            <p class="namewhat">VÌ SAO CHỌN DONASHOP.COM?</p>
                            <ul>
                                <li>✅&ensp;Tặng phiếu bảo hiểm giày và vệ sinh giày 6 tháng trị giá 500K</li>
                                <li><a href="">✅&ensp;Mua tất giảm ngay 20% (click xem chi tiết)</a></li>
                                <li>✅&ensp;Cam kết chính hãng 100%, phát hiện fake đền 2 lần giá trị đơn hàng</li>
                                <li><a href="">✅&ensp;Miễn phí đổi trả 45 ngày (click xem chi tiết)</a></li>
                                <li>✅&ensp;Double Box kèm chống sốc khi giao hàng</li>
                                <li><a href="">✅&ensp;Miễn phí bảo hành 1 năm trên toàn hệ thống (click xem chi tiết)</a></li>
                                <li>✅&ensp;Hỗ trợ trả góp, thanh toán qua thẻ online</li>
                            </ul>
                        </div>
                        <!-- size -->
                        <!-- <div class="et-pro">
                           <label class="UGW">Size </label>
                           <div class="DUI">
                               <button class="produce-variation">38</button>
                               <button class="produce-variation">39</button>
                               <button class="produce-variation">40</button>
                               <button class="produce-variation">41</button>
                               <button class="produce-variation">42</button>
                               <button class="produce-variation">43</button>
                           </div>
                       </div> -->
                        <!--choose quatity  -->
                        <div class="et-op">
                            <div class="UGW">Số lượng </div>
                            <div class="op-quantity">
                                <div class="input-quantity">
                                    <button class="increase" onclick="increase()"><i class="fas fa-minus"></i></button>
                                    <input id="textbox" type="text" role="spinbutton" aria-valuenow="1" value="1" style="width: 50px;text-align: center;" readonly>
                                    <button class="reduction" onclick="reduction()"><i class="fas fa-plus"></i></button>
                                </div>
                                <div><?= $product['quatity'] ?> sản phẩm</div>
                            </div>
                        </div>
                        <!-- add or buy -->
                        <div class="performer">
                            <div class="perform">
                                <button data-modal-target="#modal" class="btn-add" onclick="addToCart(<?= $id ?>)"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</button>
                                <div class="modal" id="modal">
                                    <div class="modal-header">
                                        <div class="check">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="modal-body">Sản phẩm đã được thêm vào Giỏ Hàng</div>

                                    <div id="overlay"></div>
                                </div>
                                <button data-modal-target="#modal" class="btn-buying" onclick="addToCart(<?= $id ?>)">Mua hàng</button>
                                <div class="modal" id="modal">
                                    <div class="modal-header">
                                        <div class="check">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="modal-body">Sản phẩm đã được thêm vào Giỏ Hàng</div>

                                    <div id="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Description -->
            <div class="tabwc">
                <div class="tab">
                    <ul>
                        <li><a href="">Mô tả</a></li>
                        <!-- <li><a href="">Đánh giá</a></li>  -->
                    </ul>
                </div>
            </div>
            <div class="content">
                <p class="nd"><?= $product['content'] ?>
                </p>
            </div>

            <!-- produce tương tự -->
            <div class="produce-same">
                <h2 class="text-h2">Sản phẩm tương tự</h2>
                <div class="content-same">
                    <div class="list-same">
                        <div class="pr-same">
                            <div class="same">
                                <a href="">
                                    <img src="./assets/image/sp/sp-same/sp1.png" alt="">
                                    <div class="caption">
                                        <p class="name-same">Giày nữ Nike Air Force 1 Low ‘Stitched Canvas’ CK6572-600</p>
                                        <span class="price-same">4.590.000₫</span>
                                    </div>
                                </a>
                            </div>

                            <div class="same">
                                <a href="">
                                    <img src="./assets/image/sp/sp-same/sp2.png" alt="">
                                    <div class="caption">
                                        <p class="name-same">Giày nam Nike Air Force 1 Pixel Particle Ghost Aqua CK6649-400</p>
                                        <span class="price-same">4.290.000₫</span>
                                    </div>
                                </a>
                            </div>

                            <div class="same">
                                <a href="">
                                    <img src="./assets/image/sp/sp-same/sp3.png" alt="">
                                    <div class="caption">
                                        <p class="name-same">Giày nam Nike Air Force 1 Pixel Particle Ghost Aqua CK6649-400</p>
                                        <span class="price-same">4.590.000₫</span>
                                    </div>
                                </a>
                            </div>

                            <div class="same">
                                <a href="">
                                    <img src="./assets/image/sp/sp-same/sp4.png" alt="">
                                    <div class="caption">
                                        <p class="name-same">Giày nữ Nike Air Force 1 Easter CW0367-100</p>
                                        <span class="price-same">4.290.000₫</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="footer">
            <?php
            include_once('./layoutshare/footer.php');
            ?>
        </div>

    </div>
    <!-- copyright -->
    <div class="copyright">
        <?php
        include_once('./layoutshare/copyright.php');
        ?>
    </div>
    </div>
    <!--Login  -->
    <div class="limiter">
        <?php
        include_once('./layoutshare/login.php');
        ?>
    </div>
    <!-- showMenu -->
    <script src="./assets/js/showMenu.js"></script>

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

    <!-- Showlogin -->
    <script src="./assets/js/showlogin.js"></script>
    <!-- tang giam so luong -->
    <script src="./assets/js/updowndetail.js"></script>
    <!-- add giỏ hàng -->
    <script src="./assets/js/addCart.js"></script>
</body>

</html>