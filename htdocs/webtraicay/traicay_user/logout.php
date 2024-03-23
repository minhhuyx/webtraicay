<?php 
session_start(); // Bắt đầu hoặc sử dụng phiên làm việc hiện có

// Xóa các biến phiên liên quan đến đăng nhập
unset($_SESSION['user_id']);
unset($_SESSION['fullname']);
unset($_SESSION['role_id']);

// Chuyển hướng người dùng đến trang chính
header('Location: Trangchu.php');
exit(); // Đảm bảo không có mã HTML hoặc mã PHP nào thực thi sau khi chuyển hướng
?>