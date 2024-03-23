<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HappyFresh</title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/chitietsp.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<script>
    function doihinh(obj) {
        var img = document.getElementById("mainID")
        var hinhcon = obj.src;
        // alert(hinhcon);
        img.src = hinhcon;
    }

    function Init() {
        var images = document.querySelectorAll("div.hinh1 img")
        for (var i = 0; i < images.length; i++) {
            images[i].onclick = function () {
                var img = document.getElementById("mainID")
                var hinhcon = this.src;
                img.src = hinhcon;
            }
        }
    }
</script>

<body>
    <!--header-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 lg"> <a href="Trangchu.php"><img src="image/logo.jpg"
                        style="height: 70px; width:100%;" /> </a></div>
            <div class="col-lg-10 logo" id="navbar">
                <nav class="navbar navbar-expand-sm" style="float:right">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Trangchu.php">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">SẢN
                                PHẨM</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="SPVN.php">Nội địa</a></li>
                                <li><a class="dropdown-item" href="SPNK.php">Nhập khẩu</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Gioithieu.php">LIÊN HỆ</a>
                        </li>

                        <div class="nav-item dropdown back3">
                            <?php if (isset ($user['email'])) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                        <?php echo $user['email'] ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- <li><a class="dropdown-item" href="Dangky.php">Đăng ký</a></li>
                        <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li> -->
                                        <li><a class="dropdown-item" href="tttaikhoan.php">Thông tin</a></li>
                                        <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                                    </ul>
                                </li>

                            <?php } else { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">TÀI
                                        KHOẢN</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="Dangky.php">Đăng ký</a></li>
                                        <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>
                                        <!-- <li><a class="dropdown-item" href="#">Đăng xuất</a></li> -->
                                    </ul>
                                </li>
                            <?php } ?>
                        </div>

                        <li class="nav-item">
                            <a class="nav-link" href="Giohang.php"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i> </a>
                        </li>
                    </ul>
                </nav>
            </div>


            <!-- <div class="col-lg-10 menutr1"> <br />
                <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand"><img src="image/logo.jpg" style="height: 50px;width: 100%;"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="Trangchu.php">TRANG CHỦ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Sanpham.php">SẢN PHẨM</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Gioithieu.php">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Giohang.php"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Dangnhap.php"><i class="fa fa-user"
                                            aria-hidden="true"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> -->
        </div>
    </div>

    <!--   -->
    <div class="bg">
        <p class="bgchu"><a href="Trangchu.php" class="bgchu2">Trang chủ/</a> <span>Chi tiết sản phẩm/ Dâu Korea</span>
        </p>
    </div>

    <!--banner-->

    <body onload="Init()">
        <div class="container mg1">
            <div class="row">
                <div class="col-lg-5 top1">
                    <img src="image/dau_han_quoc_330g__2__7142b9d1469a48648d945e6b1a62551a.jpg"
                        class="col-lg-12 img-fluid hinhcho" id="mainID" style="width: 100%;" />
                    <div class="hinh1">
                        <div class="col-lg-3"><img src="image/dau3.jpg" style="width: 100%;" /></div>
                        <div class="col-lg-3 "><img
                                src="image/dau_han_quoc_330g__2__7142b9d1469a48648d945e6b1a62551a.jpg"
                                style="width: 100%;" /></div>
                        <div class="col-lg-3"><img src="image/dau2.jpg" style="width: 100%;" /></div>
                        <!-- <div class="col-lg-3"><img src="image/alaska4.jpg" style="width: 100%;"/></div> -->
                    </div>

                </div>
                <!--- thông tin -->
                <div class="col-lg-6 top1">
                    <p class="chu">Dâu Korea <i class="fab fa-apple"></i>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star space"></li>
                        <li class="fa fa-star space"></li>
                        <li class="fa fa-star space"></li>
                        <li class="fa fa-star space"></li>
                    </ul>
                    </p>
                    <p class="chu1">30.000.000₫ /kg</p>
                    <p class="chu2">Số lượng:
                    <div class="row">
                        <div class="col-lg-2">
                            <select class="form-select form-select-sm" style="height: 100%;">
                                <option>1 kg</option>
                                <option>2 kg</option>
                                <option>3 kg</option>
                                <option>4 kg</option>
                                <option>5 kg</option>
                            </select>
                        </div>

                        <div class="col-lg-2 button1">
                            <button class="shop"><a href="thanhtoancho1.php"><i
                                        class="fa fa-shopping-cart"></i></a></button>
                        </div>

                    </div>
                    </p>

                    <p class="top4">Mã đơn hàng: <button class="button2"> #888888</button> </p>
                    <p>Tình trạng: <button class="button2"> Còn sản phẩm</button> </p>
                    <p>Danh mục: <button class="button2"> Dâu</button><button class="button2"> Dâu Korea </button> </p>

                </div>
            </div>
        </div>
    </body>

    <!-- xem thêm  -->
    <div class="bg7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="chu2">Các sản phẩm khác: <i class="fab fa-apple"></i> </p>
                <div class="row trai">

                    <div class="col-lg-3">
                        <p class="chos chu3"><a target="_blank" href="chitietsp5.php"><img src="image/kiwivang.webp"
                                    alt="" style="width: 100%; margin-bottom: 10px;"></a> Kiwi Gold</p>
                    </div>

                    <div class="col-lg-3">
                        <p class="chos chu3"><a target="_blank" href="chitietsp2.php"><img src="image/nhomaudon.webp"
                                    alt="" style="width: 100%; margin-bottom: 10px;"></a>Nho mẫu đơn</p>
                    </div>

                    <div class="col-lg-3">
                        <p class="chos chu3"><a target="_blank" href="chitietsp5.php"><img src="image/dualuoi.webp"
                                    alt="" style="width: 100%; margin-bottom: 10px;"></a> Dưa lưới</p>
                    </div>

                    <div class="col-lg-3">
                        <p class="chos chu3"><a target="_blank" href="chitietsp1.php"><img src="image/taoenvy.webp"
                                    alt="" style="width: 100%; margin-bottom: 10px;"></a> Táo Nevy</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--  Đánh giá  -->
    <div class="container tt">
        <div class="row">
            <div class="col-lg-12">
                <p class="chu4">Khách hàng nhận xét <i class="fab fa-apple"></i></p>

                <div class="row">
                    <div class="col-lg-3">
                        <span class="heading">4.9</span> </br>
                        <span class="fa fa-star checked cter"></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star"></span>
                        <p class="cter1">152 đánh giá</p>
                    </div>


                    <div class="col-lg-9">
                        <div class="side">
                            <div>5 <span class="fa fa-star checked"></span></div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-5"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>90%</div>
                        </div>
                        <div class="side">
                            <div>4 <span class="fa fa-star checked"></span></div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-4"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>30%</div>
                        </div>
                        <div class="side">
                            <div>3 <span class="fa fa-star checked"></span></div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-3"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>20%</div>
                        </div>
                        <div class="side">
                            <div>2 <span class="fa fa-star checked"></span></div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-2"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>6%</div>
                        </div>
                        <div class="side">
                            <div>1 <span class="fa fa-star checked"></span></div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-1"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>0%</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- đánh giá người -->
    <div class="bg6"> </br>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 bg3 hide">
                    <p class="chu5">Nguyễn Văn A </br>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        </br>
                    <p class="chu6">
                        Kiến thức, kinh nghiệm và trãi nghiệm!!!
                    </p>
                    <button class="button3"><i class="fa fa-plus red" aria-hidden="true"></i><span class="redchu"> Trả
                            lời</span></button>
                    </p>
                </div>

                <div class="bg4"> </div>

                <div class="col-lg-12 bg3 hide">
                    <p class="chu5">Nguyễn Văn B </br>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        </br>
                    <p class="chu6">
                        Kiến thức, kinh nghiệm và trãi nghiệm!!!
                    </p>
                    <button class="button3"><i class="fa fa-plus red" aria-hidden="true"></i><span class="redchu"> Trả
                            lời</span></button>
                    </p>
                </div>

                <div class="bg4"> </div>

                <div class="col-lg-12 bg3 hide">
                    <p class="chu5">Nguyễn Văn A </br>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        </br>
                    <p class="chu6">
                        Kiến thức, kinh nghiệm và trãi nghiệm!!!.
                    </p>
                    <button class="button3"><i class="fa fa-plus red" aria-hidden="true"></i><span class="redchu"> Trả
                            lời</span></button>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!--Background-->
    <div class="container-fluid bg1 bg2">
        <div class="row">
            <div class="col-lg-12">

                <div class="col-lg-6 left">
                    <p class="chu10">Địa chỉ:
                    <p class="chuend"><a target="_blank"
                            href="https://www.google.com/maps/place/X%C3%B4+Vi%E1%BA%BFt+Ngh%E1%BB%87+T%C4%A9nh,+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8037829,106.7088764,17z/data=!3m1!4b1!4m6!3m5!1s0x317528a34b0330f9:0xe301cf79d23d0abd!8m2!3d10.8037829!4d106.7114513!16s%2Fg%2F1vhq160z?entry=ttu"
                            class="bgft"><i class="fa fa-map-o" aria-hidden="true"></i> Xô Viết Nghệ Tĩnh, Bình Thạnh,
                            Hồ Chí Minh</a></p>
                    <p class="chuend"><a target="_blank" href="https://chat.zalo.me" class="bgft"><i class="fa fa-phone"
                                aria-hidden="true"></i> 0123.456.789</a></p>
                    <p class="chuend"><a target="_blank"
                            href="https://accounts.google.com/v3/signin/identifier?dsh=S839106108%3A1685892488014826&ffgf=1&ifkv=Af_xneGdLNstqykecDmL99v3D-dPzVGsOEuoFKMOxd8r7XGga0iLzz5gXiD_zzwMfAAmsBVFQTqH&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                            class="bgft"><i class="fa fa-envelope-o" aria-hidden="true"></i> HappyFresh@gmail.com</a>
                    </p>
                    <p class="chuend"><a target="_blank" href="Trangchu.php" class="bgft"><i
                                class="fa fa-internet-explorer" aria-hidden="true"></i> https://HappyFresh.com.vn</a>
                    </p>
                    </p>
                </div>

                <div class="col-lg-3 left">
                    <p class="chu10">Liên hệ:
                    <p class="left1"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a></p>
                    <p class="left1"><a target="_blank" href="https://www.instagram.com/" class="mau"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a></p>
                    <p class="left1"><a target="_blank" href="https://www.google.com.vn/?hl=vi" class="den"><i
                                class="fa fa-google" aria-hidden="true"></i></a></p>
                    <p class="left1"><a target="_blank" href="https://www.youtube.com/" class="mau"><i
                                class="fa fa-youtube-play" aria-hidden="true"></i></a></p>
                    </p>
                </div>

                <div class="col-lg-3 left">
                    <p class="chu10">Phương thứ thanh toán:
                    <p class="left1"><a target="_blank"
                            href="https://www.visa.com.vn/vi_VN/pay-with-visa/security/secure-online-shopping.php"
                            class="visa"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></p>
                    <p class="left1"><a target="_blank"
                            href="https://www.visa.com.vn/vi_VN/pay-with-visa/security/secure-online-shopping.php"
                            class="visa"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a></p>
                    <p class="left1"><a target="_blank"
                            href="https://www.visa.com.vn/vi_VN/pay-with-visa/security/secure-online-shopping.php"
                            class="visa"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></p>
                    <p class="left1"><a target="_blank"
                            href="https://www.visa.com.vn/vi_VN/pay-with-visa/security/secure-online-shopping.php"
                            class="visa"><i class="fa fa-credit-card" aria-hidden="true"></i></a></p>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--icon-->
    <div class="icon-bar">
        <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/" class="insta"><i class="fa fa-instagram"></i></a>
    </div>


    <div id="backtop">
        <i class="fas fa-chevron-up"></i>
    </div>
</body>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop()) {
                $('#backtop').fadeIn();
            }
            else {
                $('#backtop').fadeOut();
            }
        });
        $("#backtop").click(function () {
            $('html,body').animate({
                scrollTop: 0
            }, 400);
        });
    });
</script>

</html>