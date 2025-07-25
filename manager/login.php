<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <div class="login-container">
      <form class="login-form"  action="login.php" method="POST">
        <h2>Đăng nhập</h2>
        <div class="input-group">
          <label for="username">Tên đăng nhập</label>
          <input type="text" name="username" id="username" required />
        </div>
        <div class="input-group">
          <label for="password">Mật khẩu</label>
          <input type="password" name="password" id="password" required />
        </div>
        <button type="submit">Đăng nhập</button>
        <p class="message">
          Chưa có tài khoản? <a href="../manager/register.php">Đăng ký</a>
        </p>
        <a href="../index.php">Trang chủ</a>
      </form>
    </div>
  </body>
</html>
