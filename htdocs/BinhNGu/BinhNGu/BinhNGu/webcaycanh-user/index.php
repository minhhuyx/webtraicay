<?php 

require 'connect.php';


?>



<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link href="img/icon/icon-logo.png" rel="shortcut icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
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
            <a href="#"><img src="img/banner/bieutuong_off.png" alt=""></a>
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
                <li><a href="./shop-grid.html">Mua Sắm</a></li>
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
    <section class="hero">
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
                    <div class="hero__item set-bg relative_pos" data-setbg="img/hero/hinh3.jpg">
                        <div class="blur"></div>
                        <div class="hero__text relative_pos">
                            <span>DỄ CHĂM SÓC</span>
                            <h2>Xanh mát <br> không gian</h2>
                            <p>Vận chuyển miễn phí và nhanh chóng</p>
                            <a href="#" class="primary-btn">MUA NGAY</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Begin banner top-->
       
    <div class="banner">
        <div class="container banner_top">
            <div class="title">
                <!-- <p><i class="fas fa-seedling"></i></p> -->
                <p>Thế giới cây cảnh</p>
            </div>
            <div class="row ">
                <p>Uy tính</p>
                <p>Chất lượng</p>
                <p>Tiện lợi</p>
            </div>
        </div>
    </div>
  
    <!-- End of banner top-->

    <!-- Giam gia sale off-->
    <!-- <div class="product__discount">
        <div class="section-title product__discount__title">
            <h2>Sale Off</h2>
        </div>
        <div class="row">
            <div class="product__discount__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg"
                            data-setbg="img/product/discount/pd-1.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Raisin’n’nuts</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg"
                            data-setbg="img/product/discount/pd-2.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Vegetables</span>
                            <h5><a href="#">Vegetables’package</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg"
                            data-setbg="img/product/discount/pd-3.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Mixed Fruitss</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg"
                            data-setbg="img/product/discount/pd-4.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Raisin’n’nuts</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg"
                            data-setbg="img/product/discount/pd-5.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Raisin’n’nuts</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg"
                            data-setbg="img/product/discount/pd-6.jpg">
                            <div class="product__discount__percent">-20%</div>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>Dried Fruit</span>
                            <h5><a href="#">Raisin’n’nuts</a></h5>
                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end of sale off -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <!-- <div class="product__discount">
                <div class="section-title product__discount__title">
                    <h2>Sale Off</h2>
                </div>
                <div class="row">
                    <div class="product__discount__slider owl-carousel">
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-1.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Raisin’n’nuts</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-2.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Vegetables</span>
                                    <h5><a href="#">Vegetables’package</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-3.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Mixed Fruitss</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-4.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Raisin’n’nuts</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-5.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Raisin’n’nuts</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-6.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Raisin’n’nuts</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row sale">
                <h4>Giảm giá</h4>
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="product__discount__item">
                            <div class="product__discount__item__pic set-bg"
                                data-setbg="img/sale/suong-rong-da-mini.jpg">
                                <div class="product__discount__percent">-10%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <span>Cây để bàn</span>
                                <h5><a href="#">Sương rồng đá mini</a></h5>
                                <div class="product__item__price">45.000 VNĐ <span>50.000 VNĐ</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__discount__item">
                            <div class="product__discount__item__pic set-bg"
                                data-setbg="img/sale/cay-de-vuong-van-phong.jpg">
                                <div class="product__discount__percent">-20%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <span>Cây trong nhà</span>
                                <h5><a href="#">Cây đế vương</a></h5>
                                <div class="product__item__price">360.000 VNĐ <span>450.000 VNĐ</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__discount__item">
                            <div class="product__discount__item__pic set-bg"
                                data-setbg="img/sale/cay-dua-canh-nen.jpg">
                                <div class="product__discount__percent">-15%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <span>Cây để bàn</span>
                                <h5><a href="#">Cây dứa cảnh nến</a></h5>
                                <div class="product__item__price">110.000 VNĐ <span>130.000 VNĐ</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__discount__item">
                            <div class="product__discount__item__pic set-bg"
                                data-setbg="img/sale/cay-giot-suong.jpg">
                                <div class="product__discount__percent">-25%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <span>Cây dây leo</span>
                                <h5><a href="#">Cây sen đá giọt sương</a></h5>
                                <div class="product__item__price">112.000 VNĐ<span>150.000 VNĐ</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__discount__item">
                            <div class="product__discount__item__pic set-bg"
                                data-setbg="img/sale/cay-lan-y-thuy-sinh-dep.jpg">
                                <div class="product__discount__percent">-10%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <span>Cây thủy sinh</span>
                                <h5><a href="#">Cây lan ý thủy sinh</a></h5>
                                <div class="product__item__price">135.000 VNĐ<span>150.000 VNĐ</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product__discount__item">
                            <div class="product__discount__item__pic set-bg"
                                data-setbg="img/sale/cay-ngu-gia-bi.jpg">
                                <div class="product__discount__percent">-5%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <span>Cây trong nhà</span>
                                <h5><a href="#">Cây ngũ gia bì</a></h5>
                                <div class="product__item__price">90.000 VNĐ<span>95.000 VNĐ</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Nổi bật</h2>
                    </div>
                    <div class="featured__controls ">
                        <ul>
                            <li class="active" data-filter="*">Tất cả</li>
                            <li data-filter=".cay-de-ban">Cây để bàn</li>
                            <li data-filter=".cay-day-leo">Cây dây leo</li>
                            <li data-filter=".cay-tet">Cây tết</li>
                            <li data-filter=".cay-thuy-sinh">Cây thủy sinh</li>
                            <li data-filter=".cay-trong-nha">Cây trong nhà</li>
                            <li data-filter=".cay-ngoai-vuon">Cây ngoài vườn</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="featured__filter smooth-scrollbar ">
                <div class="row height-prevent ">
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-ngoai-vuon">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cay-mat-cat-300.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây mật cật</a></h6>
                                <h5>300.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-trong-nha ">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cay-bach-ma-hoang-tu-320.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây bạch mã hoàng tử</a></h6>
                                <h5>350.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-trong-nha ">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cay-hanh-phuc-150.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây hạnh phúc</a></h6>
                                <h5>155.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-de-ban cay-trong-nha">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cay-huong-thao-de-ban-125.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây hương thảo</a></h6>
                                <h5>250.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-de-ban cay-trong-nha">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cay-trung-chim-lon.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây xương rồng trứng chim lớn</a></h6>
                                <h5>29.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-day-leo cay-ngoai-vuon">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cay-binh-an.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây bình an</a></h6>
                                <h5>149.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-day-leo cay-de-ban cay-trong-nha">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cay-thuong-xuan-159.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây thường xuân</a></h6>
                                <h5>159.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-thuy-sinh cay-trong-nha">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/co-dong-tien.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cỏ đồng tiền</a></h6>
                                <h5>99.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-thuy-sinh cay-trong-nha cay-de-ban cay-ngoai-vuon">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cay-phu-quy.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây phú quý</a></h6>
                                <h5>49.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-tet cay-ngoai-vuon">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/cuc-mai.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây cúc mai</a></h6>
                                <h5>563.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-tet cay-ngoai-vuon">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/mai-do.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Cây mai đỏ</a></h6>
                                <h5>299.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix cay-de-ban cay-ngoai-vuon">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/xuong-rong-tai-tho.jpg">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Xương rồng tai thỏ</a></h6>
                                <h5>36.000 VNĐ</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

      <!-- Banner Begin -->
      <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <div class="banner__pic relative_pos">
                        <img src="img/banner/banner1.jpg" alt="">
                        <div class="blur full-screen">
                                <h2><b>Cây để bàn</b></h2>
                                <p>Thoáng đãng, mát mẻ</p>
                                <a href="#" class="primary-btn">MUA NGAY</a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <div class="banner__pic relative_pos">
                        <img src="img/banner/banner2.jpg" alt="">
                        <div class="blur full-screen">
                            <div class="blur full-screen">
                                <h2><b>Cây ngoài vườn</b></h2>
                                <p>Làm đẹp ngôi nhà</p>
                                <a href="#" class="primary-btn">MUA NGAY</a>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

     <!-- Latest Product Section Begin -->
     <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Mới nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/cay-phu-quy.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <!-- Phần này chưa đổi tiếng việt nè -->
                                        <h6>Crab Pool Security</h6> 
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/co-dong-tien.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/cay-mat-cat-300.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-bong-nho-110.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây bông nho</h6>
                                        <span>110.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-hong-anh.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây hồng anh</h6>
                                        <span>199.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-kim-ngan-499.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây kim ngân</h6>
                                        <span>499.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Đánh giá cao nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cuc-tan-an-do-35.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây cúc tần Ấn Độ</h6>
                                        <span>35.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/luoi-ho-thai-69.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây lưỡi hổ thái</h6>
                                        <span>69.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/xuong-rong-tai-tho.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Xương Rồng tai thỏ</h6>
                                        <span>36.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/cay-de-ban/xuong-rong-nui.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Xương rồng núi</h6>
                                        <span>66.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/cay-de-ban/cay-mong-rong.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây móng rồng</h6>
                                        <span>64.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/featured/cay-binh-an.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây bình an</h6>
                                        <span>149.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Dành cho bạn</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/cay-de-ban/xuong-rong-astro.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây xương rồng Astro</h6>
                                        <span>79.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/truc-day-leo-110.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Trúc dây leo</h6>
                                        <span>110.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/tieu-thao-xoan-19.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây tiểu thảo xoắn</h6>
                                        <span>39.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-anh-duong.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây ánh dương</h6>
                                        <span>250.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cam-tu-mai-30.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây cẩm tú mai</h6>
                                        <span>30.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic fix_size">
                                        <img src="img/latest-product/cay-bong-trang-90.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Cây bông trang</h6>
                                        <span>90.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

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
    <script src="js/perfect-scrollbar.min.js"></script>
    <script src="js/home_ScrollbarScript.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
