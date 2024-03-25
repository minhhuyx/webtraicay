<?php
include 'server.php';
//  $user = [] ; 
$user = (isset ($_SESSION['user'])) ? $_SESSION['user'] : [];
// $user = $_SESSION['user']; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sản phẩm</title>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="css/sanpham.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

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

<body>

  <!--header-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 lg"> <a href="Trangchu.php"><img src="image/logo.jpg" style="height: 70px; width:100%;" />
        </a> </div>

      <div class="col-lg-10 logo" id="navbar">
        <nav class="navbar navbar-expand-sm" style="float:right">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Trangchu.php">TRANG CHỦ</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">SẢN PHẨM</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="SPVN.php">Nội địa</a></li>
                <li><a class="dropdown-item" href="SPNK.php">Nhập khẩu</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Gioithieu.php">LIÊN HỆ</a>
            </li>

            <div class="nav-item dropdown back3">
            <?php if (isset($_SESSION['fullname'])) { ?>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
        <?php echo $_SESSION['fullname']; ?>
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="tttaikhoan.php">Thông tin</a></li>
        <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
      </ul>
    </li>
  <?php } else { ?>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">TÀI KHOẢN</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="Dangky.php">Đăng ký</a></li>
        <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>
      </ul>
    </li>
  <?php } ?>
            </div>

            <li class="nav-item">
              <a class="nav-link" href="Giohang.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
            </li>
          </ul>
        </nav>
      </div>


      <!-- 
      <div class="col-lg-10 menutr1"> <br />
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand"><img src="image/logo.jpg" style="height: 50px; width: 100%;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
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
                  <a class="nav-link" href="Giohang.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Dangnhap.php"><i class="fa fa-user" aria-hidden="true"></i> </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div> -->

    </div>
  </div>

  <!--    -->
  <div class="bg">
    <p class="bgchu"><a href="Trangchu.php" class="bgchu2">Trang chủ</a>/ Sản Phẩm</p>
  </div>

  <!-- fontcenter  -->
  <div class="container mg center">
    <div class="row">
      <div class="col-lg-12">
        <button class="bt1">Trái cây Nội địa</button>
      </div>
    </div>
  </div>

  <!--store-->
  <div class="container-fluid mg2">
    <div class="row">
      <div class="col-lg-12">

        <div class="row">

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/sau1.jpg" style="width: 100%;" />
              <p class="text-title">Sầu Riêng</p>
              <p class="text-body"><span>800.000₫</span> 550.000₫</p>
            </div>
            <a target="_blank" href="chitietsp19.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/buoi2.jpg" style="width: 100%;" />
              <p class="text-title">Bưởi Tân Triều</p>
              <p class="text-body"><span>300.000₫</span> 150.000₫</p>
            </div>
            <a target="_blank" href="chitietsp20.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/VN3.jpg" style="width: 100%;" />
              <p class="text-title">Cam Sành</p>
              <p class="text-body"><span>300.000₫</span> 130.000₫</p>
            </div>
            <a target="_blank" href="chitietsp21.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/VN4.webp" style="width: 100%;" />
              <p class="text-title">Đu Đủ</p>
              <p class="text-body">200.000₫</p>
            </div>
            <a target="_blank" href="chitietsp22.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/duahau2.jpg" style="width: 100%;" />
              <p class="text-title">Dưa hấu</p>
              <p class="text-body">200.000₫</p>
            </div>
            <a target="_blank" href="chitietsp23.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/VN6.jpg" style="width: 100%;" />
              <p class="text-title">Chôm Chôm</p>
              <p class="text-body">100.000₫</p>
            </div>
            <a target="_blank" href="chitietsp24.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/VN7.webp" style="width: 100%;" />
              <p class="text-title">Dưa lưới</p>
              <p class="text-body">500.000₫</p>
            </div>
            <a target="_blank" href="chitietsp25.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/VN8.webp" style="width: 100%;" />
              <p class="text-title">Chanh dây</p>
              <p class="text-body">450.000₫</p>
            </div>
            <a target="_blank" href="chitietsp26.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/man3.jpg" style="width: 100%;" />
              <p class="text-title">Mận</p>
              <p class="text-body">100.000₫</p>
            </div>
            <a target="_blank" href="chitietsp27.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/chuoi2.jpg" style="width: 100%;" />
              <p class="text-title">Chuối</p>
              <p class="text-body"><span>200.000₫</span> 150.000₫</p>
            </div>
            <a target="_blank" href="chitietsp28.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/sau1.jpg" style="width: 100%;" />
              <p class="text-title">Sầu Riêng</p>
              <p class="text-body"><span>800.000₫</span>550.000₫</p>
            </div>
            <a target="_blank" href="chitietsp19.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/buoi2.jpg" style="width: 100%;" />
              <p class="text-title">Bưởi Tân Triều</p>
              <p class="text-body"><span>300.000₫</span>150.000₫</p>
            </div>
            <a target="_blank" href="chitietsp20.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/VN3.jpg" style="width: 100%;" />
              <p class="text-title">Cam Sành</p>
              <p class="text-body"><span>300.000₫</span> 130.000₫</p>
            </div>
            <a target="_blank" href="chitietsp21.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/VN4.webp" style="width: 100%;" />
              <p class="text-title">Đu Đủ</p>
              <p class="text-body">200.000₫</p>
            </div>
            <a target="_blank" href="chitietsp22.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

          <div class="col-lg-2 card l">
            <div class="card-details">
              <img src="image/duahau2.jpg" style="width: 100%;" />
              <p class="text-title">Dưa hấu</p>
              <p class="text-body">200.000₫</p>
            </div>
            <a target="_blank" href="chitietsp23.php">
              <div><button class="card-button">Mua hàng</button></div>
            </a>
          </div>

        </div>

      </div>
    </div>
  </div>


  <!--Background-->
  <div class="container-fluid bg2">
    <div class="row bg1">
      <div class="col-lg-12">

        <div class="col-lg-6 left">
          <p class="chu1">Địa chỉ:
          <p class="chu2"><a target="_blank"
              href="https://www.google.com/maps/place/X%C3%B4+Vi%E1%BA%BFt+Ngh%E1%BB%87+T%C4%A9nh,+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8037829,106.7088764,17z/data=!3m1!4b1!4m6!3m5!1s0x317528a34b0330f9:0xe301cf79d23d0abd!8m2!3d10.8037829!4d106.7114513!16s%2Fg%2F1vhq160z?entry=ttu"
              class="bgft gach"><i class="fa fa-map-o" aria-hidden="true"></i> Xô Viết Nghệ Tĩnh, Bình Thạnh, Hồ Chí
              Minh</a></p>
          <p class="chu2"><a target="_blank" href="https://chat.zalo.me" class="bgft gach"><i class="fa fa-phone"
                aria-hidden="true"></i> 0123.45.67.89</a></p>
          <p class="chu2"><a target="_blank"
              href="https://accounts.google.com/v3/signin/identifier?dsh=S839106108%3A1685892488014826&ffgf=1&ifkv=Af_xneGdLNstqykecDmL99v3D-dPzVGsOEuoFKMOxd8r7XGga0iLzz5gXiD_zzwMfAAmsBVFQTqH&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
              class="bgft gach"><i class="fa fa-envelope-o" aria-hidden="true"></i> HappyFresh@gmail.com</a></p>
          <p class="chu2"><a target="_blank" href="Trangchu.php" class="bgft gach"><i class="fa fa-internet-explorer"
                aria-hidden="true"></i> https://HappyFresh.com.vn</a></p>
          </p>
        </div>

        <div class="col-lg-3 left">
          <p class="chu1">Liên hệ:
          <p class="left1"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"
                aria-hidden="true"></i></a></p>
          <p class="left1"><a target="_blank" href="https://www.instagram.com/" class="mau"><i class="fa fa-instagram"
                aria-hidden="true"></i></a></p>
          <p class="left1"><a target="_blank" href="https://www.google.com.vn/?hl=vi" class="den"><i
                class="fa fa-google" aria-hidden="true"></i></a></p>
          <p class="left1"><a target="_blank" href="https://www.youtube.com/" class="mau"><i class="fa fa-youtube-play"
                aria-hidden="true"></i></a></p>
          </p>
        </div>

        <div class="col-lg-3 left">
          <p class="chu1">Phương thứ thanh toán:
          <p class="left1"><a target="_blank"
              href="https://www.visa.com.vn/vi_VN/pay-with-visa/security/secure-online-shopping.php" class="visa"><i
                class="fa fa-cc-visa" aria-hidden="true"></i></a></p>
          <p class="left1"><a target="_blank"
              href="https://www.visa.com.vn/vi_VN/pay-with-visa/security/secure-online-shopping.php" class="visa"><i
                class="fa fa-cc-paypal" aria-hidden="true"></i></a></p>
          <p class="left1"><a target="_blank"
              href="https://www.visa.com.vn/vi_VN/pay-with-visa/security/secure-online-shopping.php" class="visa"><i
                class="fa fa-cc-mastercard" aria-hidden="true"></i></a></p>
          <p class="left1"><a target="_blank"
              href="https://www.visa.com.vn/vi_VN/pay-with-visa/security/secure-online-shopping.php" class="visa"><i
                class="fa fa-credit-card" aria-hidden="true"></i></a></p>
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

</html>