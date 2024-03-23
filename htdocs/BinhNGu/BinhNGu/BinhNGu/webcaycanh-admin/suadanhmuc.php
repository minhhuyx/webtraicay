<?php 
if(isset($_POST["btnluu"])){
	require 'connect.php'; 

	$tencu = $_POST["tencu"];
	$tenmoi = $_POST["tenmoi"];

    $linkanh = $_POST["linkanh"];
   
	mysqli_query($conn,"
    UPDATE danhmuc
    SET TENDANHMUC = '$tenmoi', ANHDANHMUC = '$linkanh'
    WHERE TENDANHMUC = '$tencu';
        ");

}

?>
<!DOCTYPE html>
<html lang="vi-VN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Sửa danh mục</title>
	<link href="assets/img/icon/icon-logo.png" rel="shortcut icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">

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
						<li ><a href="categories.html" class="active">Danh mục</a></li>
						<li><a href="product.html">Sản phẩm</a></li>
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
						<li><a href="service-list.html">Nhà cung cấp</a></li>
						
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
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
					
						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col">
									<h3 class="page-title">Sửa danh mục</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="categories.html">Danh mục</a></li>
										<li class="breadcrumb-item active">Sửa danh mục</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Page Header -->
						
						<div class="card">
							<div class="card-body">
							
								<!-- Form -->
								<form action="" method="post">
									<div class="form-group">
										<label>Tên danh mục cũ</label>
										<?php
										echo "<input class='form-control' type='text' name = 'tencu' value = ''>";
										?>
									</div>

                                    <div class="form-group">
										<label>Tên danh mục mới</label>
										<input class="form-control" type="text" name = "tenmoi">
									</div>

									<div class="form-group">
										<label>Hình ảnh danh mục</label>
										<input class="form-control" type="file" name = "linkanh">
									</div>
									<div class="form-group">
										<div class="avatar">
											<img class="avatar-img rounded" alt="" src="assets/img/categories/cay-de-ban.jpg">
										</div>
									</div>
									<div class="mt-4">
										<button class="btn btn-primary" type="submit" name = "btnluu">Lưu</button>
										<a href="categories.html" class="btn btn-link">Hủy</a>
									</div>
								</form>
								<!-- /Form -->
								
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

	<!-- Custom JS -->
	<script src="assets/js/admin.js"></script>

</body>

</html>