<?php 

if(isset($_POST["btnluu"])){
    require 'connect.php';

    $tenncc = $_POST["tennhacungcap"];
    $sanphamncc = $_POST["sanphamnhacungcap"];
    $linkanh = $_POST["linkanhnhacungcap"];
	$diachi = $_POST["diachinhacungcap"];
	$danhmuc = $_POST["danhmuc"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];

    $id= mysqli_query($conn,"
        SELECT MAX(MANCC)
        FROM nhacuncap;
    ");
   	 	$idmoi= $id-> fetch_assoc();
    	$idmoi1 = $idmoi["MAX(MANCC)"];
		$idmoi1++;

    mysqli_query($conn,"
    insert into nhacuncap (MANCC,TENNCC,DCNCC,SDTNCC,EMAILNCC)
    values ('$idmoi1','$tenncc','$diachi','$sdt','$email')
");
}
?>


<!DOCTYPE html>
<html lang="vi-VN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Thêm Nhà cung cấp</title>
	<link href="assets/img/icon/icon-logo.png" rel="shortcut icon">

	

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!-- Select CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/admin.css">

</head>

<body>
	<div class="main-wrapper">
	
		<!-- Header -->
		<div class="header">
			<div class="header-left"> 
				<a href="dashboard.html" class="logo logo-small">
					<img src="assets/img/logo-icon.png" alt="Logo" width="30" height="30">
				</a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fas fa-align-left"></i>
			</a>
			<a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
				<i class="fas fa-align-left"></i>
			</a>
			
			<ul class="nav user-menu">
				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="far fa-bell"></i>  <span class="badge badge-pill"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Thông Báo</span>
							<a href="javascript:void(0)" class="clear-noti"> xóa tất cả </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/ong.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Ung Thành Vũ đã gửi phản hồi</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">15 Tháng Chín 2020 10:20</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="notification-detail.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user21.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Nguyễn Hoàng Sơn đã gửi phản hồi</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">13 Tháng Chín 2020 15:56</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/customer/user22.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Biên Bá Hiền đã gửi phản hồi</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">12 Tháng Chín 2020 06:05 </span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user23.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Ngô Thế Huân đã gửi phản hồi</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">11 Tháng Chín 2020 12:04 </span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user24.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Dương Dĩnh đã gửi phản hồi</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">10 Tháng Chín 2020 08:42</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user25.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Lưu Thi Thi đã gửi phản hồi</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">9 Tháng Chín 2020 11:01 </span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user26.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details">
													<span class="noti-title">Trương Tân Thành đã gửi phản hồi</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">8 Tháng Chín 2020 06:23 </span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="admin-notification.html">Tất cả Thông báo</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->				
				<!-- User Menu -->
				<li class="nav-item dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-toggle="dropdown">
						<span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="admin-profile.html">Thông tin cá nhân</a>
						<a class="dropdown-item" href="login.html">Đăng xuất</a>
					</div>
				</li>
				<!-- /User Menu -->
				
			</ul>
		</div>
		<!-- /Header -->
		
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-logo">
                <a href="dashboard.html">
                    <img src="assets/img/logo-icon.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="dashboard.html"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-tasks"></i> <span>Quản lí</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="categories.html">Danh mục</a></li>
                                <li><a href="product.html" >Sản phẩm</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="coupon-code-type.html">Loại mã giảm giá</a></li>
                                <li><a href="coupon-code.html">Mã giảm giá</a></li>
                                <li><a href="ratingstype.html">Loại đánh giá</a></li>
                                <li><a href="email.html">Email</a></li>
                            
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-shopping-cart"></i><span>Bán hàng</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="total-report.html">Danh sách đặt hàng</a></li>
                                <li><a href="shipments.html">Vận chuyển</a></li>
                                <li><a href="return-request.html">Bảo hành</a></li>
                                <li><a href="review-reports.html">Đánh giá sản phẩm</a></li>
                                
                                
                            </ul>
                        </li>
                        
                        <li class="submenu">
                            <a href="#"><i class="fas fa-users"></i><span>Người dùng</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="users.html">Khách hàng</a></li>
                                <li><a href="admin-list.html">Danh sách admin</a></li>
                                <li><a href="service-list.html"  class="active">Nhà cung cấp</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a href="admin-profile.html"><i class="fas fa-user-plus"></i> <span>Thông tin cá nhân</span></a>
                        </li>
                        <li>
                            <a href="settings.html"><i class="fas fa-cog"></i> <span>Thiết lập</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
        
        <div class="page-wrapper">
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Thêm nhà cung cấp</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="service-list.html">Nhà cung cấp</a></li>
								<li class="breadcrumb-item active">Thêm nhà cung cấp</li>
							</ul>
						</div>
						<!-- <div class="col-auto text-right">
							<a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
								<i class="fas fa-filter"></i>
							</a>
							<a href="add-category.html" class="btn btn-primary add-button ml-3">
								<i class="fas fa-plus"></i>
							</a>
						</div> -->
					</div>
				</div>
				<!-- /Page Header -->
				
				<!-- Search Filter -->
				<div class="card filter-card" id="filter_inputs">
					<div class="card-body pb-0">
						<form action="#" method="post">
							<div class="row filter-row">

								<!-- thay đổi ở đây ************************ -->
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Mã sản phẩm</label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Tên sản phẩm</label>
										<input class="form-control" type="text">
									</div>
								</div>
                                <!-- Thay đổi theo danh sách đề mục -->
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Category</label>
										<select class="form-control select">
											<option>Chọn Danh Mục</option>
											<option>Cây để bàn</option>
											<option>Cây dây leo</option>
											<option>Cây tết</option>
											<option>Cây thủy sinh</option>
											<option>Cây trong nhà</option>
											<option>Cây ngoài vườn</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Từ Ngày</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Đến Ngày</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Chọn</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- /Search Filter -->
				
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0 datatable">
                                        <!-- Thay đổi code ở đây Thay đổi theo file word -->
                                        <!-- Form -->
                                        <form action="" method="post">
									
									
                                   
                                    <div class="form-group">
											<label>Tên</label>
										<input class="form-control" type="text" name = "tennhacungcap" value="">
                                    </div>
                                    <div class="form-group">
										<label>Sản phẩm</label>
										<input class="form-control" type="text" name = "sanphamnhacungcap" value="">
                                    </div>
                                    <div class="form-group">
										<label>Ảnh</label>
										<input class="form-control" type="file" name = "linkanhnhacungcap">
									</div>
									<div class="form-group">
										<div class="avatar">
											<img class="avatar-img rounded" alt="" src="">
										</div>
									</div>
									<div class="form-group">
										<label>Địa chỉ</label>
										<input class="form-control" type="text" name = "diachinhacungcap" value="">
                                    </div>
                                    <div class="form-group">
										<label>Danh mục</label><br>
										<select class="form-control select" name = "danhmuc">
											<option>Chọn Danh Mục</option>
											<option>Cây để bàn</option>
											<option>Cây dây leo</option>
                                            <option>Cây tết</option>
                                            <option>Cây trong nhà</option>
                                            <option>Cây thủy sinh</option>
                                            <option>Cây Ngoài vườn</option>
										</select>
									</div>
									<div class="form-group">
										<label>Số điện thoại</label>
										<input class="form-control" type="text" name = "sdt" value="">
                                    </div>
                                    <div class="form-group">
										<label>Email</label>
										<input class="form-control" type="Email" name = "email" value="">
                                    </div>
									<div class="mt-4">
										<button class="btn btn-primary" type="submit" name = "btnluu">Lưu thay đổi</button>
										<a href="categories.html" class="btn btn-link">Hủy</a>
									</div>
								</form>
								<!-- /Form -->
                                        <!-- Thêm vào nội dung ở đây -->
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>



	<!-- Select2 JS -->
	<script src="assets/js/select2.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>

</html>
	