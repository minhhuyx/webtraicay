<?php
require 'connect.php';

if(isset($_POST["btnsubmit"])){
    $user_name = $_POST["dangnhap"];
	$hoten = $_POST["fname"];
    $ngaysinh = $_POST["birth"];
    $sdt = $_POST["phone"];
    $email = $_POST["mail"];
	$cityd = $_POST["city"];
	$quan = $_POST["district"];
	$diachinha = $_POST["address"];
	$matkhau1 = $_POST["pass1"];
	$matkhau2 = $_POST["pass2"];



    //kiểm tra xem 2 
	
    if($matkhau1 != $matkhau2){
        echo "2 mk ko giong nhau";
    }
    else{
		$diachifull = $diachinha.$quan.$cityd;
        $pass = ($matkhau2);

        $id = mysqli_query($conn,"
        SELECT MAX(USERID)
        FROM user;
    ");
    $idmoi = $id -> fetch_assoc();
    $idmoi1 = $idmoi["MAX(USERID)"];
    (int)$idmoi1;
    $idmoi1++;



        mysqli_query($conn,"
            insert into user (USERNAME,EMAILUS,PASSWORD,FULLNAME,DIACHIUS,PHONEUS,DATEOFBIRTH,USERID)
            values			 ('$user_name','$email','$pass','$hoten','$diachifull','$sdt','$ngaysinh','$idmoi1')
        ");

        echo"dang ky' thanh` cong";
        header("Location: dangnhap.php");

    }
}

?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Ký</title>
    <link href="img/icon/icon-logo.png" rel="shortcut icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.html"><img src="img/banner/bieutuong_off.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Tổng:<span>150.000đ</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="sign-in.html"><i class="fa fa-user"></i>Đăng Nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Trang Chủ</a></li>
                <li><a href="./shop-grid.html">Cửa Hàng</a></li>
                <!-- <li><a href="./blog.html">Nhật Ký</a></li> -->
                <li><a href="./contact.html">Liên Hệ</a></li>
                <!-- <li><a href="#">Thêm</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Chi Tiết Sản Phẩm</a></li>
                        <li><a href="./shoping-cart.html">Giỏ Hàng</a></li>
                        <li><a href="./checkout.html">Thanh Toán</a></li>
                        <li><a href="./blog-details.html">Giới Thiệu Cửa Hàng</a></li>
                    </ul>
                </li> -->
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Miễn Phí Giao Hàng Cho Các Đơn Từ 499.000đ</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Miễn Phí Giao Hàng Cho Các Đơn Từ 499.000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="sign-in.html"><i class="fa fa-user"></i> Đăng Nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/banner/bieutuong_off.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Trang Chủ</a></li>
                            <li><a href="./shop-grid.html">Mua sắm</a></li>
                            <li><a href="./contact.html">Liên hệ</a></li>
                            <!-- <li><a href="#">Thêm</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Chi Tiết Sản Phẩm</a></li>
                                    <li><a href="./shoping-cart.html">Giỏ Hàng</a></li>
                                    <li><a href="./checkout.html">Thanh Toán</a></li>
                                    <li><a href="./blog-details.html">Giới Thiệu</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng:<span>150.000đ</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
  <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh Mục</span>
                        </div>
                        <ul>
                            
                            <li><a href="#">Cây để bàn</a></li>
                            <li><a href="#">Cây dây leo</a></li>
                            <li><a href="#">Cây tết</a></li>
                            <li><a href="#">Cây thủy sinh</a></li>
                            <li><a href="#">Cây trong nhà</a></li>
                            <li><a href="#">Cây ngoài vườn</a></li>
                            <!-- <li><a href="#">Hoa Chậu</a></li>
                            <li><a href="#">Đất Trồng Cây</a></li>
                            <li><a href="#">Dụng Cụ Làm Vườn</a></li>
                            <li><a href="#">Chậu Cảnh</a></li>
                            <li><a href="#">Tiểu Cảnh</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Tất Cả
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Tên cây cảnh">
                                <button type="submit" class="site-btn">TÌM KIẾM</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84353535355</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Hero Section End -->

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/banner/bg1.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Thế Giới Cây Cảnh</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Trang Chủ</a>
                        <span>Đăng Kí</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
    <!-- Sign In Section Begin -->
    <section class="sign-in spad">
        <div class="container">
            <div class="row sign__in sign__up">
                <div class="col-lg">
                    <div class="sign__in__form sign__up__form">
					<form action="" method="post">
                            <button><a href="sign-in.html" class="btn-dn">ĐĂNG NHẬP</a></button>
                            <button><a href="sign-up.html" class="btn-dk">ĐĂNG KÍ</a></button><br>
                            <input type="text" name="fname" id="fname" placeholder="Họ Tên (*)" required><br>
                            <input type="date" name="birth" id="birth"  placeholder="Ngày Sinh"><br>
                            <input type="number" name="phone" id="phone" placeholder="Điện Thoại (*)" required><br>
                            <input type="email" name="mail" id="mail"  placeholder="Email (*)" required><br>
                            <select name="city" id="city">
                                <option value="">Tỉnh/Thành phố (*)</option>
                                <option value="254">An Giang</option>
                                <option value="255">Bà Rịa - Vũng Tàu</option>
                                <option value="256">Bắc Giang</option>
                                <option value="257">Bắc Kạn</option>
                                <option value="258">Bạc Liêu</option>
                                <option value="259">Bắc Ninh</option>
                                <option value="260">Bến Tre</option>
                                <option value="261">Bình Định</option>
                                <option value="262">Bình Dương</option>
                                <option value="263">Bình Phước</option>
                                <option value="264">Bình Thuận</option>
                                <option value="265">Cần Thơ</option>
                                <option value="266">Cà Mau</option>
                                <option value="267">Cao Bằng</option>
                                <option value="268">Đà Nẵng</option>
                                <option value="269">Đắk Lắk</option>
                                <option value="270">Đắk Nông</option>
                                <option value="271">Điện Biên</option>
                                <option value="272">Đồng Nai</option>
                                <option value="273">Đồng Tháp</option>
                                <option value="274">Gia Lai</option>
                                <option value="275">Hải Phòng</option>
                                <option value="276">Hà Nội</option>
                                <option value="277">Hà Giang</option>
                                <option value="278">Hà Nam</option>
                                <option value="279">Hà Tĩnh</option>
                                <option value="280">Hải Dương</option>
                                <option value="281">Hậu Giang</option>
                                <option value="282">Hòa Bình</option>
                                <option value="283">Hưng Yên</option>
                                <option value="284">Khánh Hòa</option>
                                <option value="285">Kiên Giang</option>
                                <option value="286">Kon Tum</option>
                                <option value="287">Lai Châu</option>
                                <option value="288">Lâm Đồng</option>
                                <option value="289">Lạng Sơn</option>
                                <option value="290">Lào Cai</option>
                                <option value="291">Long An</option>
                                <option value="292">Nam Định</option>
                                <option value="293">Nghệ An</option>
                                <option value="294">Ninh Bình</option>
                                <option value="295">Ninh Thuận</option>
                                <option value="296">Phú Thọ</option>
                                <option value="297">Quảng Bình</option>
                                <option value="298">Quảng Nam</option>
                                <option value="299">Quảng Ngãi</option>
                                <option value="300">Quảng Ninh</option>
                                <option value="301">Quảng Trị</option>
                                <option value="302">Sóc Trăng</option>
                                <option value="303">Sơn La</option>
                                <option value="304">Thành phố Hồ Chí Minh</option>
                                <option value="305">Tây Ninh</option>
                                <option value="306">Thái Bình</option>
                                <option value="307">Thái Nguyên</option>
                                <option value="308">Thanh Hóa</option>
                                <option value="309">Thừa Thiên Huế</option>
                                <option value="310">Tiền Giang</option>
                                <option value="312">Trà Vinh</option>
                                <option value="313">Tuyên Quang</option>
                                <option value="314">Vĩnh Long</option>
                                <option value="315">Vĩnh Phúc</option>
                                <option value="316">Yên Bái</option>
                                <option value="317">Phú Yên</option>
                            </select><br>
                            <input type="text" name="district" id="district" placeholder="Quận/Huyện">
                            <input type="text" name="address" id="address" placeholder="Địa Chỉ Chi Tiết">
							<input type="text" name="dangnhap" id="dangnhap" placeholder="Tên đăng nhập">
                            <input type="password" name="pass1" id="pass1" placeholder="Mật Khẩu" required><br>
                            <input type="password" name="pass2" id="pass2" placeholder="Nhập Lại Mật Khẩu" required><br>
                            <input type="submit" name="btnsubmit" id="submit" value="ĐĂNG KÝ"><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign In Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/banner/bieutuong_off.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Địa chỉ: Đại học Nông Lâm TP.HCM</li>
                            <li>Điện thoại: +84353535355</li>
                            <li>Email: thegioicaycanhNLU@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="footer__widget no_flex">
                        <h6>Địa chỉ bán lẻ</h6>
                        <ul>
                            <li>Địa chỉ: KIOT 35, đường số 6, Đại học Nông Lâm</li>
                            <li>Điện thoại: +84353535355</li>
                            <li>Email: thegioicaycanhNLU@gmail.com</li>
                        </ul>
                            
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget no_flex">
                        <h6>Để lại thông tin liên hệ</h6>
                        <p>Tư vấn chăm sóc, mua bán cây</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Gửi</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>