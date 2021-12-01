<?php
    require_once('../../database/dbhelper.php');
    require_once('../../utils/utility.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../../bootrap/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../bootrapassets/img/favicon.png"> -->
  <title>Quản Lý Sản Phẩm</title>

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../bootrap/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../bootrap/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <!-- include summernote css/js -->

</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../bieudo/">
        <img src="../../bootrap/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Quản Lý DONA</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  " href="../bieudo/">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Biểu Đồ</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="#">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Bảng</span>
          </a>
        </li>
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h3 class="font-weight-bolder mb-0">❤Welcome to DONA SHOP❤</h3>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../logout.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Đăng Xuất</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- container -->
    <div class="container-fluid py-4">

        <ul class="nav nav-tabs">
        
            <li class="nav-item">
                <a class="nav-link " href="../category/">Quản Lý Danh Mục</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Quản Lý Sản Phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../imagec/">Quản Lý Hình Ảnh</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../orders/">Quản Lý Đặt Hàng</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../order_details/">Chi Tiết Đơn Hàng</a>
            </li>
        </ul>


        <div class="panel panel-primary" style="border:none;">
                <div class="panel-heading">
                    <h2 class="text-center">Quản Lý Sản Phẩm</h2>
                </div>
                <div class="panel-body" style="min-width:1200px;">
                 <!-- search -->
                <form action="" method="get">
                    <div class="input-group" style="justify-content:end;">
                        <div class="form-outline">
                          <input type="search" id="search"  name="search" placeholder="Từ khóa" class="form-control" />
                        </div>
                    </div>
                  </form>
                    <a href="add.php"><button class="btn btn-success" style="margin-bottom: 15px;">Thêm Sản Phẩm</button></a>
                    <table class="" style="width:1200px;">
                        <thead>
                            <tr>
                                <th >STT</th>
                                <th style="padding-left:20px">Tên Sản Phẩm</th>
                                <th >Hình Ảnh</th>
                                <th >Giá Gốc</th>
                                <th >Giá Bán</th>
                                <th >Số Lượng</th>
                                <th style="width:180px;">Chỉ Mục</th>
                                <th>Tên Danh Mục</th>
                                <th>Cấp Độ</th>
                                <th style="padding-left:20px">Ngày Cập Nhật</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              // Phân trang
                              // lấy ra tổng số trang
                              $sql ="select count(*) as 'Total' from product";
                              $data =executeResult($sql);
                              $total =0;
                              $total = $data[0]['Total'];
                              $numPages = ceil($total/PAGE_NUMBER_MAX);
                              // xác định số trang hiện tại
                              $page = 1;
                              if(isset($_GET['page'])){
                                  $page = $_GET['page'];
                              }
                              if($page <=0)
                              {
                                  $page =1;
                              }
                              $currentIndex =($page -1 )*PAGE_NUMBER_MAX;
                              //Lấy sản phẩm từ database
                                  $sql="select product.id,product.title,product.original_price,product.price
                                      ,product.image,product.id_category,product.quatity,product.indexing,
                                      product.level,product.updated_at,
                                      category.name category_name from product left
                                      join category on product.id_category = category.id order by level asc limit $currentIndex,".PAGE_NUMBER_MAX;
                                  if(isset($_GET['search'])){
                                        $search=$_GET['search'];
                                        $sql="select product.id,product.title,product.original_price,product.price
                                          ,product.image,product.id_category,product.quatity,product.indexing,
                                          product.level,product.updated_at,category.name category_name  from  product left
                                          join category on product.id_category = category.id
                                           where title like '%$search%' order by level asc limit $currentIndex,".PAGE_NUMBER_MAX;
                                      }
                                  $productList = executeResult($sql);
                              $index = 1;
                                  foreach($productList as $item)
                                  {
                                      echo'<tr>
                                          <td >'.($index++).'</td>
                                          <td style="text-transform: capitalize;">'.$item['title'].'</td>
                                          <td><img src="/wb_php/uploads/upload/'.$item['image'].'" style="max-width:150px"></td>
                                          <td style="padding-left:12px">'.number_format($item['original_price']).'</td>
                                          <td style="padding-left:12px;">'.number_format($item['price']).'</td>
                                          <td style="padding-left:12px;">'.$item['quatity'].'</td>
                                          <td style="text-transform: capitalize;">'.$item['indexing'].'</td>
                                          <td style="padding-left:12px">'.$item['category_name'].'</td>
                                          <td style="padding-left:12px">'.$item['level'].'</td>
                                          <td style="padding-left:12px">'.$item['updated_at'].'</td>
                                          <td style="padding-left:12px">
                                              <a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>   
                                          </td>
                                          <td style="padding-left:12px">
                                              <button class="btn btn-danger" onclick="deleteCategory('.$item['id'].')">Xóa</button>
                                          </td>
                                  </tr>';
                                  }
                            ?>  
                        </tbody>
                    </table>
                    <!-- phân trang -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                                <?php
                                    if($page >1){
                                        echo ' <li class="page-item">
                                                    <a class="page-link" href="?page='.($page-1).'" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                            </li>';
                                }
                                                

                                    for($i =1; $i <= $numPages; $i++) {
                                        if($i ==$page){
                                            echo '<li class="page-item active"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                                        }
                                        else
                                        {
                                            echo '<li class="page-item"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                                        }
                                    }
                                    if($page <$numPages){
                                        echo '<li class="page-item">
                                                    <a class="page-link" href="?page='.($page+1).'" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                            </li>';
                                    }
                                                
                                                    
                                ?> 
                        </ul>
                    </nav>
                </div>
            </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
        <h5 class="mt-3 mb-0">See our dashboard options</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
       
      </div>
    </div>
  </div>


    <!-- xóa sản phẩm-->
    <script>
        function deleteCategory(id){
            var options = confirm('Bạn có muốn xóa sản phẩm này không?')
            if(!options){
                return ;
            }
            //ajax lenh post
            $.post('ajax.php',{
                'id':id,
                //kiểm tra xem có truyền đúngg lệnh hay k
                'action':'delete'
            }, function(data){
                location.reload()

            })

        }
    </script>
  <!--   Core JS Files   -->
  <script src="../../bootrap/assets/js/core/popper.min.js"></script>
  <script src="../../bootrap/assets/js/core/bootstrap.min.js"></script>
  <script src="../../bootrap/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../bootrap/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../../bootrap/assets/js/plugins/chartjs.min.js"></script>

  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../bootrap/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
     
</body>

</html>