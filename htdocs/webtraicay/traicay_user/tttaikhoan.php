<?php
include 'server.php';
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HappyFresh</title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/taikhoan.css" rel="stylesheet" type="text/css" />
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
    function togglePasswordVisibility() {
  const passwordField = document.getElementById("password-field");
  const toggleIcon = document.getElementById("toggle-icon");

  if (passwordField.type === "password") {
    passwordField.type = "text";
    toggleIcon.classList.remove("fas", "fa-eye-slash");
    toggleIcon.classList.add("far", "fa-eye");
  } else {
    passwordField.type = "password";
    toggleIcon.classList.remove("far", "fa-eye");
    toggleIcon.classList.add("fas", "fa-eye-slash");
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
                        <?php if (isset($_SESSION['fullname'])) { ?>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
        <?php echo $_SESSION['fullname']; ?>
      </a>
      <ul class="dropdown-menu">
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
                            <a class="nav-link" href="Giohang.php"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i> </a>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>

    <!--   -->
    <div class="bg">
        <p class="bgchu"><a href="Trangchu.php" class="bgchu2">Trang chủ/</a> <span>Tài khoản</span> </p>
    </div>

    <!--banner-->
    <div class="container khung">
        <div class="row">
            <div class="col-lg-12">

                <div class="col-lg-4 left">
                    <div class="top1">
                        <p class="chu2 chu1">
                            TRANG TÀI KHOẢN
                        </p>

                        <?php if (isset ($user['name'])): ?>
                            <p class="chu4">
                                <span class="chu2">Xin chào, </span>

                                <span>
                                    <?php echo $user['name']; ?>!
                                </span>
                            </p>
                        <?php endif; ?>
                    </div>

                    <br>
                    <a class="chu3" href="tttaikhoan.php">
                        Thông tin tài khoản
                    </a>

                    <br><br>
                    <a class="chu3" href="edittk.php">
                        Chỉnh sửa
                    </a>

                    <br><br>
                    <a class="chu3" href="Gioithieu.php">
                        Liên hệ CSKH
                    </a>

                </div>

                <div class="line"></div>

                <div class="col-lg-6 left">
                    <div class="chu2 chu1">
                        TÀI KHOẢN
                    </div>

                    <div class="chu5">
                        <?php if (isset ($user['name'])): ?>
                            <p>
                                <span>Tên tài khoản, </span>
                                <span>
                                    <?php echo $user['name']; ?>!
                                </span>
                            </p>
                        <?php endif; ?>

                        </br>
                        <?php 
                        $user_id = $_SESSION['user_id']; // Giả sử bạn sử dụng session để lưu trữ ID của người dùng sau khi họ đăng nhập

                        // Truy vấn để lấy thông tin địa chỉ của người dùng
                        $sql = "SELECT fullname FROM users WHERE id = $user_id";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // Hiển thị thông tin địa chỉ
                            while($row = $result->fetch_assoc()) {
                                $fullname = $row["fullname"];
                                ?>
                                <!-- Hiển thị địa chỉ trong mã HTML -->
                                <p class="chu6"><i class="fas fa-user"></i> Tên tài khoản: <?php echo $fullname; ?></p>
                                <?php
                            }
                        } else {
                            echo "Không có thông tin địa chỉ.";
                        }




                        $user_id = $_SESSION['user_id']; // Giả sử bạn sử dụng session để lưu trữ ID của người dùng sau khi họ đăng nhập

                        // Truy vấn để lấy thông tin địa chỉ của người dùng
                        $sql = "SELECT address FROM users WHERE id = $user_id";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // Hiển thị thông tin địa chỉ
                            while($row = $result->fetch_assoc()) {
                                $address = $row["address"];
                                ?>
                                <!-- Hiển thị địa chỉ trong mã HTML -->
                                <p class="chu6"><i class="fa fa-home" aria-hidden="true"></i> Địa chỉ: <?php echo $address; ?></p>
                                <?php
                            }
                        } else {
                            echo "Không có thông tin địa chỉ.";
                        }

                        $user_id = $_SESSION['user_id']; // Giả sử bạn sử dụng session để lưu trữ ID của người dùng sau khi họ đăng nhập

// Truy vấn để lấy thông tin số điện thoại của người dùng
$sql = "SELECT phone_number FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị thông tin số điện thoại
    while($row = $result->fetch_assoc()) {
        $phone_number = $row["phone_number"];
        ?>
        <!-- Hiển thị số điện thoại trong mã HTML -->
        <p class="chu6"><i class="fa fa-mobile" aria-hidden="true"></i> Số điện thoại: <?php echo $phone_number; ?></p>
        <?php
    }
} else {
    echo "Không có thông tin số điện thoại.";
}

$user_id = $_SESSION['user_id']; // Giả sử bạn sử dụng session để lưu trữ ID của người dùng sau khi họ đăng nhập

// Truy vấn để lấy thông tin email của người dùng
$sql = "SELECT email FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị thông tin email
    while($row = $result->fetch_assoc()) {
        $email = $row["email"];
        ?>
        <!-- Hiển thị email trong mã HTML -->
        <p class="chu6"><i class="fa fa-envelope" aria-hidden="true"></i> Email: <?php echo $email; ?></p>
        <?php
    }
} else {
    echo "Không có thông tin email.";
}

$sql = "SELECT password FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị thông tin mật khẩu
    while($row = $result->fetch_assoc()) {
        $password = $row["password"];
        ?>
        <!-- Hiển thị mật khẩu trong mã HTML -->
        <p class="chu6">
        <span id="password-container">
  <input type="password" id="password-field"  value="<?php echo $password; ?>" >
  <i class="fas fa-eye-slash" id="toggle-icon" onclick="togglePasswordVisibility()"></i>
</span>
</p>
        <?php
    }
} else {
    echo "Không có thông tin mật khẩu.";
}





                        ?>
                        


                    </div>

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


</html>