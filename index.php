<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VNTravel.vn</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../css/style.css" />
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
        <a href="index.html">Trang chủ</a>
        <a href="#introduce">Giới thiệu</a>
        <a href="#tourTravel">Các tour du lịch</a>
        <a href="#service">Dịch vụ</a>
        <a href="#">Liên hệ</a>
      </nav>
    </div>
    <div class="icons">
      <button onclick="doichedo()" id="cheDoIcon">🌙</button>
      <i class="fa-solid fa-magnifying-glass"></i>
      <i class="fa-solid fa-bell"></i>
      <div class="register">
        <a href="../manager/login.php">Đăng nhập</a>
        <a href="../manager/register.php">Đăng kí</a>
      </div>
      </div>
    </header>
    <!-- Phần thân trang -->
    <section class="attractive-destinations">
      <h2 class="title">Điểm đến hấp dẫn trên thế giới</h2>
      <div class="destinations-container">
        <div class="destination-card item">
          <a href="page/vietnam.html">
            <img src="./img/img_diadiem/vietnam.jpg" alt="Hà Nội" />
            <div class="overlay">
              <p>Việt Nam: Đất Nước, Con Người và Văn Hóa</p>
            </div>
          </a>
        </div>
        <div class="destination-card item">
          <a href="page/hanquoc.html"
            ><img src="img/img_diadiem/du-lich-han-quoc.jpg" alt="Hàn Quốc" />
            <div class="overlay">
              <p>Hàn Quốc: Vẻ Đẹp Truyền Thống và Sức Sống Hiện Đại</p>
            </div>
          </a>
        </div>
        <div class="destination-card item">
          <a href="page/thailan.html">
            <img src="img/img_diadiem/thailan.jpeg" alt="Thái Lan" />
            <div class="overlay">
              <p>Thái Lan: Xứ Sở Chùa Vàng và Nụ Cười</p>
            </div>
          </a>
        </div>
        <div class="destination-card item">
          <a href="page/trungquoc.html">
            <img src="img/img_diadiem/trungquoc.jpg" alt="Trung Quốc" />
            <div class="overlay">
              <p>Trung Quốc: Đất Nước Cổ Kính và Hiện Đại</p>
            </div>
          </a>
        </div>
        <div class="destination-card item">
          <a href="page/singapo.html">
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
        <p>
          Chúng tôi là đơn vị hàng đầu trong lĩnh vực tổ chức tour du lịch nội
          địa và quốc tế. Với sứ mệnh mang đến những trải nghiệm đáng nhớ, mỗi
          hành trình của bạn sẽ được thiết kế tỉ mỉ và đầy cảm hứng.
        </p>
        <p>
          Đội ngũ hướng dẫn viên chuyên nghiệp, lộ trình linh hoạt và dịch vụ
          tận tâm là những gì chúng tôi cam kết để mang lại sự hài lòng tuyệt
          đối cho khách hàng.
        </p>
      </div>
    </section>
    <div class="foreign-tour-section" id="tourTravel">
      <h2><i class="fa-solid fa-plane-departure"></i> TOUR TRONG NƯỚC</h2>
      <div class="foreign-tour-list">
        <div class="foreign-tour-item">
          <img src="img/hn.jpg" alt="Tour Hà Nội" />
          <h3>Tour Hà Nội 7N6Đ</h3>
          <p class="foreign-tour-price">31,500,000đ</p>
          <p class="foreign-tour-destination">Nơi đến: Thủ đô HÀ Nội</p>
          <button>ĐẶT NGAY</button>
        </div>

        <div class="foreign-tour-item">
          <img src="img/hcm.jpg" alt="Tour TP.HCM" />
          <h3>Tour TP.HCM 7N6Đ</h3>
          <p class="foreign-tour-price">32,000,000đ</p>
          <p class="foreign-tour-destination">Nơi đến: TP.HCM</p>
          <button>ĐẶT NGAY</button>
        </div>

        <div class="foreign-tour-item">
          <img src="img/pq.jpg" alt="Tour Phú Quốc" />
          <h3>Tour Phú Quốc 5N4Đ</h3>
          <p class="foreign-tour-price">17,500,000đ</p>
          <p class="foreign-tour-destination">Nơi đến: Phú Quốc</p>
          <button>ĐẶT NGAY</button>
        </div>

        <div class="foreign-tour-item">
          <img src="img/dn.jpg" alt="Tour Đà Nẵng" />
          <h3>Tour Đà Nẵng 6N5Đ</h3>
          <p class="foreign-tour-price">22,000,000đ</p>
          <p class="foreign-tour-destination">Nơi đến: Cầu Rồng</p>
          <button>ĐẶT NGAY</button>
        </div>
      </div>
      <br />
      <br />
      <br />
      <h2><i class="fa-solid fa-plane-departure"></i> TOUR NƯỚC NGOÀI</h2>
      <div class="foreign-tour-list">
        <div class="foreign-tour-item">
          <img src="img/4.jpg" alt="Tour Úc" />
          <h3>Tour Úc 7N6Đ</h3>
          <p class="foreign-tour-price">31,500,000đ</p>
          <p class="foreign-tour-destination">Nơi đến: Sydney</p>
          <button>ĐẶT NGAY</button>
        </div>

        <div class="foreign-tour-item">
          <img src="img/3.jpg" alt="Tour Pháp" />
          <h3>Tour Pháp 7N6Đ</h3>
          <p class="foreign-tour-price">32,000,000đ</p>
          <p class="foreign-tour-destination">Nơi đến: Paris</p>
          <button>ĐẶT NGAY</button>
        </div>

        <div class="foreign-tour-item">
          <img src="img/1.jpg" alt="Tour Hàn Quốc" />
          <h3>Tour Hàn Quốc 5N4Đ</h3>
          <p class="foreign-tour-price">17,500,000đ</p>
          <p class="foreign-tour-destination">Nơi đến: Seoul</p>
          <button>ĐẶT NGAY</button>
        </div>

        <div class="foreign-tour-item">
          <img src="img/2.jpg" alt="Tour Nhật Bản" />
          <h3>Tour Nhật Bản 6N5Đ</h3>
          <p class="foreign-tour-price">22,000,000đ</p>
          <p class="foreign-tour-destination">Nơi đến: Tokyo, Kyoto</p>
          <button>ĐẶT NGAY</button>
        </div>
      </div>
    </div>

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
    <div class="footer">
      <div class="footer-content">
        <div class="footer-icon">
          <a href="https://www.facebook.com/" target="_blank"
            ><i class="fa-brands fa-facebook"></i
          ></a>
          <a href="https://www.instagram.com/" target="_blank"
            ><i class="fa-brands fa-instagram"></i
          ></a>
          <a href="https://www.youtube.com/" target="_blank"
            ><i class="fa-brands fa-youtube"></i
          ></a>
          <a href="https://x.com/" target="_blank"
            ><i class="fa-brands fa-twitter"></i
          ></a>
          <a href="https://www.tiktok.com/vi-VN/" target="_blank"
            ><i class="fa-brands fa-tiktok"></i
          ></a>
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
