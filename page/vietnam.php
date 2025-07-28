<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khám phá Việt Nam</title>
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
    }

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 30px;
        background-color: #ffffff;
        color: #000000;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1;
    }

    .logo-header {
        display: flex;
        align-items: center;
    }

    .logo {
        color: rgb(58, 163, 79);
        font-weight: bold;
        font-size: 24px;
    }

    nav a {
        padding: 14px;
        text-decoration: none;
        color: rgb(0, 0, 0);
        font-size: 14px;
    }

    .icons {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .icons i {
        font-size: 20px;
        color: #000000;
    }

    .icons .avatar {
        width: 30px;
        border-radius: 4px;
    }

    .icon_img {
        width: 30px;
        height: 30px;
    }

    .title {
        margin-top: 69px;
        background-color: #005648;
        /* Màu xanh lá sẫm tượng trưng cho sự tươi tốt */
        color: white;
        padding: 1em 0;
        text-align: center;
    }

    .title h1 {
        margin: 0;
        font-size: 55px;
    }

    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
        padding: 20px 0;
    }

    .section {
        background-color: #fff;
        margin-bottom: 20px;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .section h2 {
        color: #007bff;
        /* Màu đỏ nổi bật */
        border-bottom: 2px solid #CD0000;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .section img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .section ul {
        list-style: none;
        padding: 0;
    }

    .section ul li {
        background: #e9ecef;
        /* Màu xanh nhạt */
        margin-bottom: 8px;
        padding: 10px;
        border-left: 5px solid #00468B;
        /* Đường viền xanh đậm */
        border-radius: 3px;
    }

    .footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 1em 0;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    /* Ẩn hết dữ liệu khi ấn vào các địa điểm */
    .attractive-destinations,
    .intro-section,
    .foreign-tour-section,
    .foreign-tour-list,
    .our-services,
    footer,
    .footer-content {
        display: none;
    }
</style>
</style>

<body>
    <div class="title">
        <h1>Việt Nam: Đất Nước, Con Người và Văn Hóa</h1>
    </div>
    <div class="container">
        <section class="section">
            <h2>Giới thiệu chung</h2>
            <p>Việt Nam là một quốc gia nằm ở phía đông bán đảo Đông Dương, Đông Nam Á. Với lịch sử hàng ngàn năm văn hiến, Việt Nam tự hào với nền văn hóa đa dạng, cảnh quan thiên nhiên hùng vĩ và con người hiếu khách.</p>
            <img style="text-align: center;" src="https://vietrektravel.com/ckeditor/plugins/fileman/Uploads/vietrel-travel/bai-viet/ky-quan-thien-nhien-the-gioi-tai-viet-nam/ky-quan-thien-nhien-vinh-ha-long.jpg" alt="Cảnh quan Việt Nam">
            <p>Từ những bãi biển tuyệt đẹp ở miền Trung đến những ngọn núi trùng điệp ở miền Bắc, Việt Nam luôn có điều gì đó để khám phá.</p>
        </section>

        <section class="section">
            <h2>Các điểm đến nổi bật</h2>
            <ul>
                <li><strong>Hà Nội:</strong> Thủ đô ngàn năm văn hiến với những di tích lịch sử và ẩm thực đường phố phong phú.</li>
                <li><strong>Vịnh Hạ Long:</strong> Di sản thiên nhiên thế giới UNESCO với hàng ngàn đảo đá vôi kỳ vĩ.</li>
                <li><strong>Huế:</strong> Cố đô của Việt Nam, nơi lưu giữ nhiều công trình kiến trúc cổ kính và ẩm thực cung đình.</li>
                <li><strong>Hội An:</strong> Phố cổ lung linh đèn lồng, mang đậm nét kiến trúc truyền thống và không khí yên bình.</li>
                <li><strong>Thành phố Hồ Chí Minh:</strong> Trung tâm kinh tế sầm uất, năng động với nhiều bảo tàng, khu vui chơi giải trí.</li>
                <li><strong>Đà Nẵng:</strong> Thành phố biển hiện đại với những cây cầu độc đáo và bãi biển Mỹ Khê nổi tiếng.</li>
            </ul>
            <img src="https://scov.gov.vn/upload/2005660/20210923/84920e5ed2642e8c3898e43967ad4abf110043_DS_PhoCoHoiAn_1_.jpg" alt="Phố cổ Hội An">
        </section>

        <section class="section">
            <h2>Ẩm thực Việt Nam</h2>
            <p>Ẩm thực Việt Nam nổi tiếng thế giới với sự đa dạng, tinh tế và hương vị đặc trưng. Một số món ăn không thể bỏ qua bao gồm:</p>
            <ul>
                <li><strong>Phở:</strong> Món ăn quốc hồn quốc túy với nước dùng đậm đà, thịt bò/gà và bánh phở mềm.</li>
                <li><strong>Bún chả:</strong> Đặc sản của Hà Nội với thịt nướng than hoa ăn kèm bún và nước chấm chua ngọt.</li>
                <li><strong>Gỏi cuốn:</strong> Món khai vị thanh mát với tôm, thịt, rau sống cuốn trong bánh tráng.</li>
                <li><strong>Bánh mì:</strong> Món ăn đường phố phổ biến với vỏ bánh giòn rụm và nhân đa dạng.</li>
                <li><strong>Cà phê trứng:</strong> Thức uống độc đáo của Hà Nội, sự kết hợp giữa cà phê và lòng đỏ trứng đánh bông.</li>
            </ul>
            <img src="https://dienmaynewsun.com/wp-content/uploads/2021/03/pho-viet-nam-2.jpg" alt="Phở Việt Nam">
        </section>
    </div>

    <div class="footer">
        <p>&copy; 2025 Khám phá Việt Nam. Mọi quyền được bảo lưu.</p>
    </div>
    <script>
        var chedo = true;

        function doichedo() {
            var body = document.body;
            var icon = document.getElementById("cheDoIcon");
            var sections = document.querySelectorAll('section')
            if (chedo) {
                body.style.backgroundColor = "black";
                body.style.color = "white";
                sections.forEach(select => (
                    select.style.color = '#000'
                ))
                icon.innerHTML = "☀️";
                chedo = false;
            } else {
                body.style.backgroundColor = "white";
                body.style.color = "black";
                sections.forEach(select => (
                    select.style.color = '#000'
                ))
                // section1.style.color = "#000"
                // section2.style.color = "#000"
                icon.innerHTML = "🌙";
                chedo = true;
            }
        }
    </script>
</body>

</html>