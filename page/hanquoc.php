<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khám phá Hàn Quốc</title>
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
        /* .topbar {
            position: fixed;
            width: 99%;
            top: 0;
            background: #005bbb;
            color: white;
            padding: 10px;
            text-align: right;
            z-index: 999;
        }
        .topbar a {
        color: white;
        margin-left: 10px;
        text-decoration: none;
        } */
.navbar {
  display: flex;                  
  align-items: center;          
  justify-content: space-between; 
  padding: 15px 30px;          
  background-color: #ffffff;    
  color: #000000;                               
  position: fixed;              
  width: 97%;   
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
    background-color: #00468B; /* Màu xanh đậm tượng trưng cho cờ Hàn Quốc */
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
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.section h2 {
     color: #CD0000; /* Màu đỏ nổi bật */
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
    background: #e6f2ff; /* Màu xanh nhạt */
    margin-bottom: 8px;
    padding: 10px;
    border-left: 5px solid #00468B; /* Đường viền xanh đậm */
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
.attractive-destinations ,.intro-section ,.foreign-tour-section ,.foreign-tour-list,.our-services, footer,.footer-content {
    display: none;
}
    </style>
 </style>
<body>
     <nav>
          <a href="index.php">Trang chủ</a>
          <a href="index.php?page_layout=introduce">Giới thiệu</a>
          <a href="index.php?page_layout=tourTravel">Các tour du lịch</a>
          <a href="index.php?page_layout=service">Dịch vụ</a>
          <a href="index.php">Liên hệ</a>
        </nav>
     <div class="title">
        <h1>Hàn Quốc: Vẻ Đẹp Truyền Thống và Sức Sống Hiện Đại</h1>
    </div>

    <div class="container">
        <section class="section">
            <h2>Giới thiệu chung</h2>
            <p>Hàn Quốc, hay Đại Hàn Dân Quốc, là một quốc gia nằm ở phía Nam bán đảo Triều Tiên. Nổi tiếng với sự kết hợp hài hòa giữa lịch sử lâu đời, văn hóa truyền thống phong phú và sự phát triển công nghệ vượt bậc, Hàn Quốc đã trở thành một điểm đến hấp dẫn du khách từ khắp nơi trên thế giới.</p>
            <img src="https://idcedu.com.vn/wp-content/uploads/2021/01/Cung-Gyeongbokgung-3-1536x1009.jpg" alt="Cung điện Gyeongbokgung">
            <p>Từ những cung điện cổ kính, làng nghề truyền thống đến những thành phố hiện đại sầm uất, Hàn Quốc mang đến những trải nghiệm đa dạng cho mọi du khách.</p>
        </section>

        <section class="section">
            <h2>Các điểm đến nổi bật</h2>
            <ul>
                <li><strong>Seoul:</strong> Thủ đô năng động với sự pha trộn giữa kiến trúc cổ kính (cung điện Gyeongbokgung, làng Hanok Bukchon) và các khu phố hiện đại (Gangnam, Myeongdong).</li>
                <li><strong>Busan:</strong> Thành phố biển lớn thứ hai, nổi tiếng với bãi biển Haeundae, làng văn hóa Gamcheon và chợ cá Jagalchi.</li>
                <li><strong>Đảo Jeju:</strong> Hòn đảo núi lửa xinh đẹp, được mệnh danh là "Hawaii của Hàn Quốc" với cảnh quan thiên nhiên hùng vĩ và khí hậu ôn hòa.</li>
                <li><strong>Gyeongju:</strong> Cố đô của vương quốc Silla, là "bảo tàng không tường" với vô số di tích lịch sử được UNESCO công nhận.</li>
                <li><strong>Núi Seoraksan:</strong> Một trong những ngọn núi đẹp nhất Hàn Quốc, nổi tiếng với cảnh quan ngoạn mục vào mùa thu.</li>
                <li><strong>Jeonju:</strong> Thành phố ẩm thực với làng Hanok Jeonju truyền thống, nơi du khách có thể trải nghiệm văn hóa truyền thống và thưởng thức ẩm thực địa phương.</li>
            </ul>
            <img src="https://www.dulichhoanmy.com/wp-content/uploads/2022/11/thap-n-seoul-han-quoc.jpg" alt="Tháp N Seoul">
        </section>

        <section class="section">
            <h2>Ẩm thực Hàn Quốc</h2>
            <p>Ẩm thực Hàn Quốc nổi bật với hương vị đậm đà, sự cân bằng dinh dưỡng và cách trình bày đẹp mắt. Các món ăn thường có vị cay nồng, mặn và ngọt hài hòa.</p>
            <ul>
                <li><strong>Kimchi:</strong> Món ăn quốc dân, là rau củ muối chua cay, có mặt trong hầu hết các bữa ăn của người Hàn.</li>
                <li><strong>Bibimbap:</strong> Cơm trộn thập cẩm với rau, thịt, trứng và tương ớt Gochujang.</li>
                <li><strong>Bulgogi:</strong> Thịt bò nướng tẩm ướp gia vị đặc trưng, mềm và thơm ngon.</li>
                <li><strong>Tteokbokki:</strong> Bánh gạo cay, món ăn đường phố phổ biến và được yêu thích.</li>
                <li><strong>Samgyeopsal:</strong> Thịt ba chỉ nướng, thường được cuộn trong rau xà lách và ăn kèm tỏi, ớt.</li>
                <li><strong>Japchae:</strong> Miến trộn rau củ và thịt, có hương vị thanh đạm, thơm ngon.</li>
            </ul>
            <img src="https://www.thespruceeats.com/thmb/4Qckb9A9KGyG-q_czTZieMWCGgk=/2048x1367/filters:fill(auto,1)/classic-korean-bibimbap-recipe-2118765_20_preview-5b1ee284ba61770037c8ad38.jpeg" alt="Bibimbap">
        </section>
    </div>

    <div class="footer">
        <p>&copy; 2025 Khám phá Hàn Quốc. Mọi quyền được bảo lưu.</p>
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
        sections.forEach(select =>(
            select.style.color = '#000'
        ))
        icon.innerHTML = "☀️";
        chedo = false;
    } else {
        body.style.backgroundColor = "white";
        body.style.color = "black";
        sections.forEach(select =>(
            select.style.color = '#000'
        ))
        icon.innerHTML = "🌙";
        chedo = true;
    }
}
    </script>
</body>

</html>