<?php
session_start();
require 'server.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; // Đổi thành username thay vì fullname
    $password = $_POST["password"];

    // Kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
    $query = "SELECT * FROM users WHERE fullname=? AND password=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['role_id'] = $row['role_id'];
        
        if ($_SESSION['role_id'] == 1) {
            header("Location: Trangchu.php"); // Đổi thành trang dành cho người dùng
        } elseif ($_SESSION['role_id'] == 2) {
            header("Location:../admin/QLKH.php"); // Trang quản trị admin
        } else {
            echo "Vai trò không hợp lệ";
        }
    } else {
        echo "Tên người dùng hoặc mật khẩu không đúng!";
    }

    $stmt->close();
    $conn->close();
}
?>
