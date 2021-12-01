<?php
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    unset($_SESSION['login']);
}
?>
<div class="logo">🥾신발 가게👠</div>
<div class="nav_bars">
    <button class="show-menu" type="button"><i class="fas fa-bars"></button></i>
</div>
<div class="navgation javas-navgation">
    <ul>
        <li><a href="./home.php"><i class="fas fa-home"></i> Trang Chủ</a></li>
        <li><a href="/wb_php/hotbrand.php"><i class="fab fa-themeisle"></i> Hot Brand</a></li>
        <li><a href="/wb_php/news.php"><i class="fas fa-newspaper"></i> Tin Tức</a></li>
        <li><a href="./cart.php"><i class="fas fa-cart-plus"></i> Giỏ Hàng</a></li>
        <li class="js-log" style="font-size:18px;cursor:pointer;"><i class="far fa-user-circle"></i> Tài Khoản</a>
            <?php
            if (isset($_SESSION['login'])) {
                echo '<ul class="submenu">
                                            <li><a href="">Đổi Mật Khẩu</a></li>
                                            <li><a href="">Đăng Xuất</a></li>
                                        </ul>';
            }
            ?>
        </li>
        <!-- search -->
        <li class="searchs">
            <form action="" method="get">
                <div class="search-box">
                    <div class="input-box" style="padding:8px;">
                        <input name="search" type="text" title="Tìm kiếm" autocomplete="off" placeholder="Nhập tên giày...">
                    </div>
                    <div class="search-button">
                        <button style="font-size:20px;"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </li>
    </ul>
</div>
<div class="nav_overlay"></div>