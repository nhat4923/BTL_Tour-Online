<?php
  include('connect.php');
  session_start();
  $tours_vn = $conn->query("SELECT * FROM tours WHERE type = 'Trong nước' ORDER BY id DESC");
  $tours_foreign = $conn->query("SELECT * FROM tours WHERE type = 'Nước ngoài' ORDER BY id DESC");

  

?>


<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VNTravel.vn</title>
  <script src="script.js"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
 
  <!-- Phần đầu trang -->
  <header class="navbar">
    <div class="logo-header">
      <div class="logo">VNTravel.vn</div>
      <nav>
        <a href="index.php">Trang chủ</a>
        <a href="#introduce">Giới thiệu</a>
        <a href="#tourTravel">Các tour du lịch</a>
        <a href="#service">Dịch vụ</a>
        <a href="#contact">Liên hệ</a>
      </nav>
    </div>
    <div class="search">
  <form method="GET" action="">
    <input type="text" name="keyword" placeholder="Bạn muốn đi đâu?..." >
    <button type="submit" name="page_layout" value="search">Tìm kiếm</button>
  </form>
    </div>
    <div class="icons">
      <button onclick="doichedo()" id="cheDoIcon">🌙</button>
      <i class="fa-solid fa-bell"></i>
      <div class="register">
      <?php 
        if(isset($_SESSION['username'])) : ?>
          Xin chào <strong><?php echo $_SESSION['username']; ?></strong>
           <a href="history.php">Lịch sử đặt tour</a>
            <a href="manager/logout.php">Đăng xuất</a>
        <?php else: ?>
            <a href="manager/login.php">Đăng nhập</a>
            <a href="manager/register.php">Đăng kí</a>
        <?php endif; ?>   
        </div>             
  </header>

  <!-- //hiện khi đăng nhập admin -->
   <!-- <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
  <a class="btn" href="admin/dashboad.php">Trang quản trị (Admin)</a>
<?php endif; ?> -->


 <!-- chia các page layout -->
  <?php
  if (isset($_GET['page_layout'])) {
    switch ($_GET['page_layout']) {
      case 'vietnam':
        include 'page/vietnam.php';
        break;
      case 'thailan':
        include 'page/thailan.php';
        break;
      case 'trungquoc':
        include 'page/trungquoc.php';
        break;
      case 'hanquoc':
        include 'page/hanquoc.php';
        break;
      case 'singapo':
        include 'page/singapo.php';
        break;
        case 'search':
        include('search.php');
        break;
    };
  }

  ?>
  <!-- kết thúc  -->
  <!-- Phần thân trang -->
  <section class="attractive-destinations">
    <h2 class="title">Điểm đến hấp dẫn trên thế giới</h2>
    <div class="destinations-container">
      <div class="destination-card item">
        <a href="index.php?page_layout=vietnam">
          <img src="./img/img_diadiem/vietnam.jpg" alt="Hà Nội" />
          <div class="overlay">
            <p>Việt Nam: Đất Nước, Con Người và Văn Hóa</p>
          </div>
        </a>
      </div>
      <div class="destination-card item">
        <a href="index.php?page_layout=hanquoc"><img src="img/img_diadiem/du-lich-han-quoc.jpg" alt="Hàn Quốc" />
          <div class="overlay">
            <p>Hàn Quốc: Vẻ Đẹp Truyền Thống và Sức Sống Hiện Đại</p>
          </div>
        </a>
      </div>
      <div class="destination-card item">
        <a href="index.php?page_layout=thailan">
          <img src="img/img_diadiem/thailan.jpeg" alt="Thái Lan" />
          <div class="overlay">
            <p>Thái Lan: Xứ Sở Chùa Vàng và Nụ Cười</p>
          </div>
        </a>
      </div>
      <div class="destination-card item">
        <a href="index.php?page_layout=trungquoc">
          <img src="img/img_diadiem/trungquoc.jpg" alt="Trung Quốc" />
          <div class="overlay">
            <p>Trung Quốc: Đất Nước Cổ Kính và Hiện Đại</p>
          </div>
        </a>
      </div>
      <div class="destination-card item">
        <a href="index.php?page_layout=singapo">
          <img src="img/img_diadiem/singapo.jpeg" alt="Singapore" />
          <div class="overlay">
            <p>Singapore: Thành Phố Sư Tử Xanh và Sạch</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="intro-section" id="introduce">
    <div class="intro-text">
      <h2>Khám phá du lịch cùng chúng tôi</h2>
      <p class="intro-content">
        Chúng tôi là đơn vị hàng đầu trong lĩnh vực tổ chức tour du lịch nội
        địa và quốc tế. Với sứ mệnh mang đến những trải nghiệm đáng nhớ, mỗi
        hành trình của bạn sẽ được thiết kế tỉ mỉ và đầy cảm hứng.
      </p>
      <p class="intro-content">
        Đội ngũ hướng dẫn viên chuyên nghiệp, lộ trình linh hoạt và dịch vụ
        tận tâm là những gì chúng tôi cam kết để mang lại sự hài lòng tuyệt
        đối cho khách hàng.
      </p>
    </div>
  </section>
  <!-- Tour trong nước -->
  <div class="foreign-tour-section" id="tourTravel">
    <h2><i class="fa-solid fa-plane-departure"></i> TOUR TRONG NƯỚC</h2>
    <div class="foreign-tour-list">
    <?php
        while ($row = $tours_vn->fetch_assoc()):
    ?>
      <div class="foreign-tour-item">
        <img src="<?= $row['image_url'] ?>" alt="Tour Hà Nội" />
        <h3><?= $row['name'] ?></h3>
        <p class="foreign-tour-price"><?= number_format($row['price'], 0) ?>đ</p>
        <p class="foreign-tour-destination">Nơi đến:  <?= $row['location'] ?></p>
        <button class="btn">
           <a href="./book_tour.php?id=<?php echo $row['id'] ?>">
                    ĐẶT NGAY
                </a>
        </button>
      </div>
      <?php endwhile ;?>
    </div>
    <!-- Tour nước ngoài -->
    <h2 style="margin-top: 15px;"><i class="fa-solid fa-plane-departure"></i> TOUR NƯỚC NGOÀI</h2>
    <div class="foreign-tour-list">
      <?php
        while ($row = $tours_foreign->fetch_assoc()):
    ?>
      <div class="foreign-tour-item">
        <img src="<?= $row['image_url'] ?>" alt="Tour Hà Nội" />
        <h3><?= $row['name'] ?></h3>
        <p class="foreign-tour-price"><?= number_format($row['price'], 0) ?>đ</p>
        <p class="foreign-tour-destination">Nơi đến:  <?= $row['location'] ?></p>
        <button class="btn">
           <a href="./book_tour.php?id=<?php echo $row['id'] ?>">
                    ĐẶT NGAY
                </a>
        </button>
      </div>
      <?php endwhile ;?>
  </div>
  <!-- Phần dịch vụ -->
  <div class="our-services" id="service">
    <h2>DỊCH VỤ CỦA CHÚNG TÔI</h2>
    <div class="service-cards">
      <div class="card">
        <i class="fa-solid fa-globe"></i>
        <h3>Tour trọn gói</h3>
        <p>
          Khám phá điểm đến nổi bật trong và ngoài nước với lịch trình hợp lý.
        </p>
      </div>
      <div class="card">
        <i class="fa-solid fa-hotel"></i>
        <h3>Khách sạn tiện nghi</h3>
        <p>Liên kết với các khách sạn từ 3 đến 5 sao với giá ưu đãi.</p>
      </div>
      <div class="card">
        <i class="fa-solid fa-bus"></i>
        <h3>Phương tiện di chuyển</h3>
        <p>Xe đưa đón, vé máy bay, tàu cao tốc được hỗ trợ trọn gói.</p>
      </div>
      <div class="card">
        <i class="fa-solid fa-headphones"></i>
        <h3>Hướng dẫn viên du lịch</h3>
        <p>
          Hướng dẫn viên chuyên nghiệp, tận tình, am hiểu văn hóa - lịch sử
          từng vùng miền.
        </p>
      </div>
    </div>
  </div>

  <!-- Phần chân trang -->
  <div class="footer" id="contact">
    <div class="footer-content">
      <div class="footer-icon">
        <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://x.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://www.tiktok.com/vi-VN/" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
      </div>
      <div class="footer-description">
        <div class="description_link">
          <a href="">Điều khoản sử dụng</a>
          <a href="">Liên hệ với chúng tôi</a>
          <a href="">Mô tả công việc</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>