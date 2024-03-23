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
  <link href="css/code.css" rel="stylesheet" type="text/css" />
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
  <style>
    .carousel-inner img {
      width: 100%;
      height: 70%;
    }
  </style>
  <title>Trang chủ</title>
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
                  <a class="nav-link" href="Dangky.php"><i class="fa fa-user" aria-hidden="true"></i> </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div> -->

    </div>
  </div>



  <!--banner-->
  <div class="container-fluid back">
    <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/header2.webp" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="image/header3.webp" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="image/header4.webp" width="1100" height="500">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

    <div class="bg">
      <form>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." title="Type in a name">
      </form>
    </div>

  </div>

  <!--Font center-->
  <div class="container menu back2">
    <h2>FLASH SALE <img src="image/hot.jpg" style="width:50px; height:45px;"></h2>
    <h2>Những sản phẩm bán chạy nhất</h2>
  </div>

  <!--Store-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/taoenvy.webp" style="width: 100%;" />
            <p class="text-title">Táo Nevy</p>
            <p class="text-body">50.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp1.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/nhomaudon.webp" style="width: 100%;" />
            <p class="text-title">Nho Mẫu Đơn</p>
            <p class="text-body">25.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp2.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/cherry.webp" style="width: 100%;" />
            <p class="text-title">Cherry Mỹ</p>
            <p class="text-body">15.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp3.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/dualuoi.webp" style="width: 100%;" />
            <p class="text-title">Dưa lưới Trung Quốc</p>
            <p class="text-body">20.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp4.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/kiwivang.webp" style="width: 100%;" />
            <p class="text-title">Kiwi Gold</p>
            <p class="text-body">55.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp5.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/camvang.webp" style="width: 100%;" />
            <p class="text-title">Cam Trung Quốc</p>
            <p class="text-body">50.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp6.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/manuc.jpg" style="width: 100%;" />
            <p class="text-title">Mận Úc</p>
            <p class="text-body">50.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp7.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/dau_han_quoc_330g__2__7142b9d1469a48648d945e6b1a62551a.jpg" style="width: 100%;" />
            <p class="text-title">Dâu Korea</p>
            <p class="text-body">30.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp8.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/quytchina.webp" style="width: 100%;" />
            <p class="text-title">Quýt Trung Quốc</p>
            <p class="text-body">40.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp9.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/quytnamphi.webp" style="width: 100%;" />
            <p class="text-title">Mận Nam Phi</p>
            <p class="text-body">10.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp10.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>


      </div>
    </div>
  </div>

  <div class="container-fluid nen2">
    <img src="image/header7.jpg" style="width: 100%; height:70%;" />
  </div>

  <div class="chu2">
    <h2>SET QUÀ TẶNG</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/gioqua1.jpg" style="width: 100%;" />
            <p class="text-title">SET 1</p>
            <p class="text-body">50.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp11.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/gioqua2.jpg" style="width: 100%;" />
            <p class="text-title">SET 2</p>
            <p class="text-body">25.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp12.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/gioqua3.jpg" style="width: 100%;" />
            <p class="text-title">SET 3</p>
            <p class="text-body">15.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp13.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/gioqua4.jpg" style="width: 100%;" />
            <p class="text-title">SET 4</p>
            <p class="text-body">20.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp14.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/gioqua5.jpg" style="width: 100%;" />
            <p class="text-title">SET 5</p>
            <p class="text-body">55.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp15.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/gioqua6.jpg" style="width: 100%;" />
            <p class="text-title">SET 6</p>
            <p class="text-body">50.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp16.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/gioqua7.jpg" style="width: 100%;" />
            <p class="text-title">SET 7</p>
            <p class="text-body">90.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp17.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>

        <div class="col-lg-2 card l">
          <div class="card-details">
            <img src="image/gioqua8.jpg" style="width: 100%;" />
            <p class="text-title">SET 8</p>
            <p class="text-body">100.000.000₫</p>
          </div>
          <a target="_blank" href="chitietsp18.php">
            <div><button class="card-button">Mua hàng</button></div>
          </a>
        </div>
      </div>
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
              Minh</a></p>
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

<script>
  function myFunction() {
    var input, filter, cards, card, title, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    cards = document.querySelectorAll(".card");

    // Hide flash sale section and image if searching for fruits or gift sets
    var flashSaleSection = document.querySelector(".chu2");
    var flashSaleImage = document.querySelector(".nen2 img");

    if (filter.includes("SET") || filter.includes("TÁO") || filter.includes("NHO") || filter.includes("CHERRY") || filter.includes("DƯA LƯỠI") || filter.includes("KIWI") || filter.includes("CAM") || filter.includes("MẬN") || filter.includes("DÂU") || filter.includes("QUÝT")) {
      flashSaleSection.style.display = "none";
      flashSaleImage.style.display = "none";
    } else {
      flashSaleSection.style.display = ""; // Show flash sale section
      flashSaleImage.style.display = ""; // Show flash sale image
    }

    for (i = 0; i < cards.length; i++) {
      card = cards[i];

      title = card.querySelector(".text-title");
      if (title) {
        txtValue = title.textContent || title.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          card.style.display = "";
        } else {
          card.style.display = "none";
        }
      }
    }
  }
</script>


</html>