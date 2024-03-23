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
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="css/gioithieu.css" rel="stylesheet" type="text/css" />
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

  <title>Giới thiệu</title>
</head>

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
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">TÀI KHOẢN</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Dangky.php">Đăng ký</a></li>
                    <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Đăng xuất</a></li> -->
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

      <!-- <div class="col-lg-10 menutr1"> <br />
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

  <!--   -->
  <div class="bg">
    <p class="bgchu"><a href="Trangchu.php" class="bgchu2">Trang chủ/</a> <span>Giới thiệu</span> </p>
  </div>

  <!--  -->
  <div class="container mgt">
    <div class="row">
      <h2 class="chu7">Liên hệ với chúng tôi:</h2>

      <div class="col-lg-6">
        <div class="container mt-3">
          <form action="/action_page.php" style="opacity: 0.6;">
            <div class="form-floating mb-3 mt-3">
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="text">
              <label for="email">Họ tên*</label>
            </div>
            <div class="form-floating mt-3 mb-3">
              <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="email">
              <label for="pwd">Email*</label>
            </div>
            <div class="form-floating mt-3 mb-3">
              <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="number">
              <label for="pwd">Số điện thoại*</label>
            </div>
            <div class="form-floating mt-3 mb-3">
              <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="text">
              <label for="pwd">Nhập nội dung*</label>
            </div>

            <button class="button1"><span class="redchu"> Gửi liên hệ</span></button>

          </form>
        </div>
      </div>

      <div class="col-lg-6">
        <div>
          <i class="fa fa-map-marker big" aria-hidden="true"></i>

          <label class="text1">Địa chỉ liên hệ: </label>
          <p class="text2">Xô Viết Nghệ Tỉnh, Bình Thạnh, Hồ Chí Minh.</p>

        </div>

        <div>
          <i class="fa fa-phone big" aria-hidden="true"></i>
          <div>
            <label class="text1">Số điện thoại: </label>
            <p class="text3">0123. 456. 789</p>
            <p class="text2">Thứ 2 - Chủ nhật: 7:00 - 21:00</p>
          </div>
        </div>

        <div>
          <i class="fa fa-envelope-o big" aria-hidden="true"></i>
          <div>
            <label class="text1">Email: </label>
            <p class="text2">HappyFresh@gmail.com</p>
          </div>
        </div>

      </div>


    </div>
  </div>

  <!---Map-->
  <div class="container map1">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2422879034466!2d106.70274917499427!3d10.792746189356976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528b47399cafb%3A0xfb5aa964e6e55268!2zMiDEkC4gVHLGsOG7nW5nIFNhLCBQaMaw4budbmcgMTcsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1687264928781!5m2!1svi!2s"
      width="100%" height="480" style="border-radius: 20px; " allowfullscreen=""></iframe>

    <div class="row">
      <img src="image/logo1.jpg" style="width: 25%; height: 150px;">
      <img src="image/logo2.jpg" style="width: 25%; height: 160px;">
      <img src="image/logo3.jpg" style="width: 25%; height: 150px;">
      <img src="image/logo4.jpg" style="width: 25%; height: 150px;">
    </div>

  </div>




  <!--Background-->
  <div class="container-fluid bg1 bg2">
    <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-6 left">
          <p class="chu1">Địa chỉ:
          <p class="chu3"><a target="_blank"
              href="https://www.google.com/maps/place/X%C3%B4+Vi%E1%BA%BFt+Ngh%E1%BB%87+T%C4%A9nh,+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8037829,106.7088764,17z/data=!3m1!4b1!4m6!3m5!1s0x317528a34b0330f9:0xe301cf79d23d0abd!8m2!3d10.8037829!4d106.7114513!16s%2Fg%2F1vhq160z?entry=ttu"
              class="bgft gach"><i class="fa fa-map-o" aria-hidden="true"></i> Xô Viết Nghệ Tĩnh, Bình Thạnh, Hồ Chí
              Minh</a>
          </p>
          <p class="chu3"><a target="_blank" href="https://chat.zalo.me" class="bgft gach"><i class="fa fa-phone"
                aria-hidden="true"></i> 0123.456.789</a></p>
          <p class="chu3"><a target="_blank"
              href="https://accounts.google.com/v3/signin/identifier?dsh=S839106108%3A1685892488014826&ffgf=1&ifkv=Af_xneGdLNstqykecDmL99v3D-dPzVGsOEuoFKMOxd8r7XGga0iLzz5gXiD_zzwMfAAmsBVFQTqH&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
              class="bgft gach"><i class="fa fa-envelope-o" aria-hidden="true"></i> HappyFresh@gmail.com</a></p>
          <p class="chu3"><a target="_blank" href="Trangchu.php" class="bgft gach"><i class="fa fa-internet-explorer"
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