<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../css/register.css" />
    <script src="/scrip.js"></script>
  </head>
  <body>
    <div class="register-container">
      <form class="register-form" action="register.php" method="POST">
        <h2>Tạo tài khoản</h2>
        <div class="input-group">
          <label for="username">Tên đăng nhập</label>
          <input type="text" name="username" id="username" required />
        </div>
        <div class="input-group">
          <label for="password">Mật khẩu</label>
          <input type="password" name="password" id="password" required />
        </div>
       <div>
         <select name="role" required>
            <option value="">-- Chọn quyền --</option>
            <option value="user">Người dùng</option>
            <option value="admin">Quản trị viên</option>
        </select>
       </div>
        <button type="submit">Đăng ký</button>
        <p class="message">
          Đã có tài khoản? <a href="../manager/login.php">Đăng nhập</a>
          <a href="../index.php">Trang chủ</a>
        </p>
      </form>
    </div>
  </body>
</html>
