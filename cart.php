<?php
require_once("./database/dbhelper.php");
require_once("./utils/utility.php");
require_once("./api/orderCart.php");

$cart = [];
if (isset($_COOKIE['cart'])) {
    $json = $_COOKIE['cart'];
    $cart = json_decode($json, true);
}
$idList = [];
foreach ($cart as $item) {
    $idList[] = $item['id'];
}
if (count($idList) > 0) {
    $idList = implode(',', $idList);
    //[2, 5, 6] => 2,5,6

    $sql = "select * from product where id in ($idList)";
    $cartList = executeResult($sql);
} else {
    $cartList = [];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <link rel="stylesheet" href="./assets//css//share.css">
    <link rel="stylesheet" href="./assets//css//cart.css">
    <!--bootrap  -->
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/Domal/css/main.css">
</head>

<body>
    <div class="main">
        <div class="banner">
            <?php
            include_once("./layoutshare/banner.php");
            ?>
        </div>
        <!-- container -->
        <div class="container">
            <div class="cart-page-header">
                <a href="#">🥾신발 가게👠 || Giỏ hàng</a>
            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-4" style="font-size:16px">
                        <h4>Thông Tin Khách Hàng</h4>
                        <div class="form-group" style="margin-top: 10px;">
                            <label for="fullname">Họ Tên:</label>
                            <input style="text-transform:capitalize;" required="true" type="text" class="form-control" name="fullname" id="fullname">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Sô Điện Thoại:</label>
                            <input required="true" type="text" class="form-control" name="phone_number" id="phone_number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input required="true" type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ:</label>
                            <input style="text-transform:capitalize;" required="true" type="text" class="form-control" name="address" id="address">
                        </div>
                        <div class="form-group">
                            <label for="size">Size:</label>
                            <select required="true" id="size" name="size" class="form-control">
                                <option value="">--- Lựa chọn size ---</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="table" style="font-size:16px;">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Hình Ảnh</th>
                                    <th scope="col">Tên Sản Phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Đơn Giá</th>
                                    <th scope="col">Thành Tiền</th>
                                    <th scope="col">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                $total = 0;
                                foreach ($cartList as $item) {
                                    $num = 0;
                                    foreach ($cart as $value) {
                                        if ($value['id'] == $item['id']) {
                                            $num = $value['num'];
                                            break;
                                        }
                                    }
                                    $total += $num * $item['price'];
                                    echo '<tr>
                                                    <td>' . (++$count) . '</td>
                                                    <td><img src="/wb_php/uploads/upload/' . $item['image'] . '" style="height:100px"/></td>
                                                    <td>' . $item['title'] . '</td>
                                                    <td>
                                                        <button style="padding-left:11px;padding-bottom:2px" class="increase"onclick="increase(' . $item['id'] . ')"><i class="fas fa-minus"></i></button>
                                                        <input id="textbox" type="number" role="spinbutton" aria-valuenow="1" value="' . $num . '" 
                                                            style="width: 50px;text-align: center;" readonly>
                                                        <button style="padding-left:11px;padding-bottom:2px" class="reduction" onclick="reduction(' . $item['id'] . ')"><i class="fas fa-plus"></i></button>
                                                    </td>
                                                    <td>' . number_format($item['price'], 0, ',', '.') . '</td>
                                                    <td>' . number_format($num * $item['price'], 0, ',', '.') . '</td>   
                                                    <td><button class="btn btn-danger" onclick="deleteCart(' . $item['id'] . ')">Xóa</button></td>
                                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <h4 style="color:orangered;display:flex;justify-content:end;
                                font-weight:600;font-family:Arial, Helvetica, sans-serif;">
                            Tổng Tiền: <?= number_format($total, 0, ',', '.') ?>VNĐ
                        </h4>
                    </div>
                </div>
                <center>
                    <button class="btn btn-success" style="margin:50px 20px;font-family:Arial, Helvetica, sans-serif;
                        font-size:25px;" onclick="notification()">Đặt Hàng</button>
                </center>
            </form>
        </div>
        <!-- footer -->
        <div class="footer">
            <?php
            include_once('./layoutshare/footer.php');
            ?>
        </div>
        <div class="copyright">
            <?php
            include_once('./layoutshare/copyright.php');
            ?>
        </div>
        <!--Login  -->
        <div class="limiter">
            <?php
            include_once('./layoutshare/login.php');
            ?>
        </div>
    </div>
    <!-- showMenu -->
    <script src="./assets/js/showMenu.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- delete sản phẩm -->
    <script src="./assets/js/deleteCart.js"></script>
    <!-- tang giam so luong -->
    <script src="./assets/js/upAnddown.js"></script>
    <!-- thông báo -->
    <script>
        function notification() {
            alert("❤Cảm ơn bạn đã luôn đồng hành cùng DONA shop❤!\nBên mình sẽ sớm liên lạc với bạn💌");
        }
    </script>
</body>

</html>