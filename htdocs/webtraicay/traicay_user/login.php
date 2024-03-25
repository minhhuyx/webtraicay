<?php 
include 'server.php' ; 
  if (isset($_POST['email'])) {
    $email = $_POST['email'] ; 
    $password = $_POST['password'] ; 
    
    $sql = "SELECT * FROM users WHERE email = '$email'" ;
    $query = mysqli_query($conn,$sql) ; 
    $data = mysqli_fetch_assoc($query) ; 
    $checkEmail = mysqli_num_rows($query) ; 
    if ($checkEmail == 1) {
     
      $checkPass = password_verify($password,$data['password']); 
      if ($checkPass){
        $_SESSION['user'] = $data ; 
        header('Location: Trangchu.php') ; 
      }
      else {
        echo "<script>alert('Sai mật khẩu');</script>"; 
      }
    }
    else {
      echo "<script>alert('Tài khoản không tồn tại');</script>"; 
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/dangnhap.css" rel="stylesheet" type="text/css" />
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
    <style>
        .carousel-inner img {
            width: 100%;
            height: 70%;
        }
    </style>
    <title>HappyFresh</title>
</head>

<script>
    $(document).ready(function () {
        $('#terms-checkbox-37').change(function () {
            if ($(this).is(':checked')) {
                $('#login-btn').prop('disabled', false).css('opacity', 1); // Hiển thị nút "Đăng nhập"
            } else {
                $('#login-btn').prop('disabled', true).css('opacity', 0.2); // Ẩn nút "Đăng nhập"
            }
        });
    });

</script>


<body>
    <!--header-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 lg"> <a href="Trangchu.php"><img src="image/logo.jpg"
                        style="height: 70px; width:100%;" /> </a> </div>
                        <div class="col-lg-10 logo">
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
              <?php if (isset($user['email'])) { ?>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <?php echo $user['email'] ?>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- <li><a class="dropdown-item" href="Dangky.php">Đăng ký</a></li>
                    <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li> -->
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


            <div class="col-lg-10 menutr1"> <br />
                <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand"><img src="image/logo.jpg" style="height: 50px; width: 100%;"></a>
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


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!--    -->
    <div class="bg">
        <p class="bgchu"><a href="Trangchu.php" class="bgchu2">Trang chủ/</a> <span>Tài khoản/ Đăng nhập</span> </p>
    </div>

    <div class="container-fluid bg6">
        <div class="row">
            <div class="col-lg-12">
                <div class="container" style="margin-top: 20px;">
                    <h6>Bạn chưa có tài khoản <a href="Dangky.php">Đăng ký tại đây</a></h6>
                </div>


                <div class="form-container space-form">
                    <p class="title">Đăng nhập</p>
                    <p class="sub-title"></p>
                    <form class="form" action="process_login.php" method="post">
                        <input  class="input" type="text" id="username" name="username" placeholder="Tên người dùng">
                        <input  class="input" type="password" id="password" name="password"  placeholder="Mật khẩu">

                        <div class="checkbox-wrapper left3">
                            <input id="terms-checkbox-37" name="checkbox" type="checkbox">
                            <label class="terms-label" for="terms-checkbox-37">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 200 200"
                                    class="checkbox-svg">
                                    <mask fill="white" id="path-1-inside-1_476_5-37">
                                        <rect height="200" width="200"></rect>
                                    </mask>
                                    <rect mask="url(#path-1-inside-1_476_5-37)" stroke-width="40" class="checkbox-box"
                                        height="200" width="200"></rect>
                                    <path stroke-width="15" d="M52 111.018L76.9867 136L149 64" class="checkbox-tick">
                                    </path>
                                </svg>
                                <span class="label-text">Tôi đồng ý với các điều khoản bảo mật cá nhân</span>
                            </label>
                        </div>

                        <button type="submit" class="form-btn" id="login-btn" disabled>Đăng nhập</button>

                    </form>

                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid bg1">

        <div class="col-lg-6 left">
            <p class="chu1">Địa chỉ:
            <p class="chu3"><a target="_blank"
                    href="https://www.google.com/maps/place/X%C3%B4+Vi%E1%BA%BFt+Ngh%E1%BB%87+T%C4%A9nh,+B%C3%ACnh+Th%E1%BA%A1nh,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.8037829,106.7088764,17z/data=!3m1!4b1!4m6!3m5!1s0x317528a34b0330f9:0xe301cf79d23d0abd!8m2!3d10.8037829!4d106.7114513!16s%2Fg%2F1vhq160z?entry=ttu"
                    class="bgft gach"><i class="fa fa-map-o" aria-hidden="true"></i> Xô Viết Nghệ Tĩnh, Bình Thạnh,
                    Hồ Chí Minh</a></p>
            <p class="chu3"><a target="_blank" href="https://chat.zalo.me" class="bgft gach"><i class="fa fa-phone"
                        aria-hidden="true"></i> 0123.456.789</a></p>
            <p class="chu3"><a target="_blank"
                    href="https://accounts.google.com/v3/signin/identifier?dsh=S839106108%3A1685892488014826&ffgf=1&ifkv=Af_xneGdLNstqykecDmL99v3D-dPzVGsOEuoFKMOxd8r7XGga0iLzz5gXiD_zzwMfAAmsBVFQTqH&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                    class="bgft gach"><i class="fa fa-envelope-o" aria-hidden="true"></i> HappyFresh@gmail.com</a>
            </p>
            <p class="chu3"><a target="_blank" href="Trangchu.php" class="bgft gach"><i class="fa fa-internet-explorer"
                        aria-hidden="true"></i> https://HappyFresh.com.vn</a>
            </p>
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
            <p class="left1"><a target="_blank" href="https://www.youtube.com/" class="mau"><i
                        class="fa fa-youtube-play" aria-hidden="true"></i></a></p>
            </p>
        </div>

        <div class="col-lg-3 left">
            <p class="chu1">Phương thứ thanh toán:
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