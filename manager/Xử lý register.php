<?php
  include('../connect.php');
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $role = $_POST['role'] ?? '';

    if (!$username || !$password || !$role) {
        die("Vui lòng nhập đầy đủ thông tin.");
    }

    // Kiểm tra username đã tồn tại chưa
    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();
    if ($check->num_rows > 0) {
        die("Tên đăng nhập đã tồn tại.");
    }

    // Mã hoá mật khẩu
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Thêm người dùng vào database
    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $hashedPassword, $role);

    if ($stmt->execute()) {
        echo "Đăng ký thành công. <a href='../manager/login.php'>Đăng nhập</a>";    
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}


?>