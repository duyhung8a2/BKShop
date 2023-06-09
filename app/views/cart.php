<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="/css/cart.css">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="/js/home.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="row cus_header">
            <div class="col-md-3 text-md-left text-center text">
                <!-- Side navbar for phone -->
                <div id="mySidenav" class="sidenav pt-5">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="d-flex align-items-center px-3">
                        <i class="bi bi-person-circle" style="font-size:20px;"></i>
                        <div class="dropdown">

                            <?php if ($authService->isLoggedIn()): ?>
                                <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                                    aria-expanded="false">
                                    <?php echo $authService->getLoggedInUser()->getUsername(); ?>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                </div>
                            <?php else: ?>
                                <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                                    aria-expanded="false">
                                    Tài khoản
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/login">Đăng nhập</a>
                                    <a class="dropdown-item" href="/register">Đăng ký</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <a href="/cart">Giỏ hàng</a>
                    <hr>
                    <a href="/">Sản phẩm</a>
                    <a href="/introduction">Giới thiệu</a>
                    <a href="/news">Tin tức</a>
                    <a href="/payment">Thanh toán</a>
                    <a href="/contact">Liên hệ</a>
                </div>
                <button class="btn sidebar d-md-none" onclick="openNav()" type="submit">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- Logo of web page -->
                <a href="/" class="px-2">
                    <img src="img/Logo.png" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
                    BKShop
                </a>
            </div>
            <!-- Search bar -->
            <div class="col-md-4 search d-none d-sm-block">
                <form class="input-group">
                    <input type="text" class="form-control" placeholder="Bạn muốn tìm gì?">
                    <div class="input-group-append">
                        <button class="btn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Account -->
            <div class="col-md-2 d-none d-sm-block" style="font-size:18px;">
                <div class="dropdown">
                    <i class="bi bi-person-circle" style="font-size:20px;"></i>
                    <?php if ($authService->isLoggedIn()): ?>
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                            aria-expanded="false">
                            <?php echo $authService->getLoggedInUser()->getUsername(); ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    <?php else: ?>
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" id="user_text"
                            aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/login">Đăng nhập</a>
                            <a class="dropdown-item" href="/register">Đăng ký</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Shopping cart -->
            <div class="col-md-3 d-none d-sm-block" style="font-size:18px;">
                <a href="/cart" id="shopcart_text">
                    <i class="bi bi-cart3" style="font-size:20px;"></i>
                    Giỏ hàng
                </a>
            </div>
        </div>
        <div class="row cus_navbar d-none">
            <div class="col-md-2 products">
                <div class="dropdown">
                    <div class="dropbtn"><i class="fa fa-bars"></i> Sản phẩm</div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="#"><i class="bi bi-laptop"></i><span>Laptop</span></a><br></li>
                            <li><a href="#"><i class="bi bi-pc-display"></i><span>PC</span></a><br></li>
                            <li><a href="#"><i class="bi bi-mouse"></i><span>Chuột máy tính</span></a><br></li>
                            <li><a href="#"><i class="bi bi-keyboard"></i><span>Bàn phím</span></a><br></li>
                            <li><a href="#"><i class="bi bi-headphones"></i><span>Tai nghe</span></a><br></li>
                            <li><a href="#"><i class="bi bi-cpu"></i><span>Linh kiện</span></a><br></li>
                            <li><a href="#"><i class="bi bi-tv"></i><span>Màn hình</span></a><br></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2 intro ml-5 d-none d-sm-block">
                <a href="/introduction">
                    Giới thiệu
                </a>
            </div>
            <div class="col-md-2 news d-none d-sm-block">
                <a href="/news">
                    Tin tức
                </a>
            </div>
            <div class="col-md-2 payment d-none d-sm-block">
                <a href="/payment">
                    Thanh toán
                </a>
            </div>
            <div class="col-md-2 contact d-none d-sm-block">
                <a href="/contact">
                    Liên hệ
                </a>
            </div>
        </div>
        <div class="row my-5 mx-auto">
            <h4 class=" text-center">Giỏ hàng của bạn</h4>
        </div>

        <div class="table-responsive">
            <?php
                if(isset($_SESSION['cart'])){
                if(isset($_POST['sl'])){
                foreach ($_POST['sl'] as $id_product => $sl) {
                //Nếu số lượng nhập vào là 0 thì unset sản phẩm đó
                    if($sl==0){
                        unset($_SESSION['cart'][$id_product]);
                    }else{
                //Nếu số khác 0 thì gán ngược lại.
                        $_SESSION['cart'][$id_product] = $sl;
                    }
                }
            }
            
            $arrId = array();
            //Lấy ra id sản phẩm từ mảng session
            foreach ($_SESSION['cart'] as $id_product => $sl) {
                $arrId[] = $id_product;
            }
            //Tách mảng arrId thành 1 chuỗi và ngăn cách bởi dấu ,
            $strID = implode(',', $arrId);
            if(isset($sl)){
            $link = mysqli_connect("localhost","root","","bkshop");
            $sql = "SELECT * FROM product WHERE id_product IN ($strID)";
            $query = mysqli_query($link, $sql);
            $totalPriceAll = 0;
           
        ?>
            <table class="table table-striped mx-auto my-3">
                <thread>
                    <tr class="table-success">
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col"></th>
                    </tr>
                </thread>
                <tbody>
                     <?php
                        while($row = mysqli_fetch_assoc($query)){
                        $totalPrice = $_SESSION['cart'][$row['id_product']]*$row['price_product'];
                    ?>
                    <tr>
                        <td>
                            <img src="img/<?php echo $row['image_product'] ?>" alt="main_pic" width="10%" height="10%">
                            <?php echo $row['name_product'] ?>
                        </td>
                        <td><?php echo $row['price_product'] ?>Đ</td>
                        <td class="col-1">
                            <form action="" method="POST">
                                <input class="form-control" type="text" name="sl[<?php echo $row['id_product'] ?>]" value="<?php echo $_SESSION['cart'][$row['id_product']]?>" />
                            </form>
                        </td>
                        <td><?php echo $row['price_product'] ?>Đ</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">
                                <a href="app/views/delete_cart.php?id_product=<?php echo $row['id_product'] ?>"><i class="bi bi-trash text-danger"></i></a>
                            </button>
                        </td>
                    </tr>
                    <?php
                        $totalPriceAll+=$totalPrice;
                        }
                    ?>
                    <tr>
                        <td class="text-right table-info" colspan="5">
                            Tổng tiền:
                            <span style="color: rgb(17, 17, 136); font-weight:600;"><?php echo $totalPriceAll ?>Đ</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
                }else{
                    echo 'Giỏ hàng rỗng';
                }
                }else{
            echo 'Giỏ hàng rỗng';
        }
            ?>
        </div>

        <div class="d-flex justify-content-between my-5">
            <button class="btn" style="background-color:#FFD700; font-weight:500;" onclick="location.href='/'"
                type="button">
                TIẾP TỤC MUA HÀNG
            </button>
            <button class="btn" style="background-color:#00B2EE; font-weight:500;" onclick="location.href='/payment'"
                type="button">
                THANH TOÁN
            </button>
        </div>
    </div>
    <footer class="bg-primary my-5">
        <div class="row g-3">
            <div class="col-md-4">
                <!-- <img src="smartphone.png" alt=""> -->
                <!-- Liên hệ với chúng tôi qua số điện thoại: 0999 999 999 -->
                <h4>LIÊN HỆ</h4>
                <p>Hệ thống tổng đài: 0999 999 999<br>(Hoạt động từ 8h đến 20h cùng ngày)</p>
                <p>Email: bkshop.vn@gmail.com</p>
            </div>
            <div class="col-md-4">
                <h4>HỆ THỐNG CỬA HÀNG</h4>
                <p>- Địa chỉ 1: 268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh, Việt Nam</p>
                <p>- Địa chỉ 2: Đông Hòa, Dĩ An, Bình Dương, Việt Nam</p>
            </div>
            <div class="col-md-4">
                <h4>THÔNG TIN VÀ CHÍNH SÁCH</h4>
                <a href="#">Mua hàng và đổi trả online</a><br>
                <a href="#">Tra thông tin đơn hàng</a><br>
                <a href="#">Tra cứu hóa đơn điện tử</a><br>
                <a href="#">Dịch vụ bảo hành</a><br>
                <a href="#">Tuyển dụng</a><br>
            </div>
        </div>
    </footer>
    <script src="js/home.js"></script>
</body>

</html>