<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khám phá Thái Lan</title>
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
    background-color: #FF0000;  
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
color: #000080; /* Màu xanh đậm (Navy) tương ứng với màu xanh trên cờ Thái */
border-bottom: 2px solid #000080;
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
background: #ffe6e6; /* Màu hồng nhạt */
margin-bottom: 8px;
padding: 10px;
border-left: 5px solid #FF0000; /* Đường viền đỏ */
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

footer {
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
     <div class="title">
         <h1>Thái Lan: Xứ Sở Chùa Vàng và Nụ Cười</h1>
    </div>
    <div class="container">
        <section class="section">
            <h2>Giới thiệu chung</h2>
            <p>Thái Lan, quốc gia nằm ở trung tâm Đông Nam Á, nổi tiếng với biệt danh "Xứ sở chùa vàng" hay "Đất nước của những nụ cười". Với nền văn hóa Phật giáo đậm đà, những ngôi chùa cổ kính, bãi biển tuyệt đẹp và ẩm thực đường phố phong phú, Thái Lan luôn là điểm đến hấp dẫn du khách quốc tế.</p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjZ4A9MSa4E1No6C9zHBrMGSLkhGkgfVYkQw&s" alt="Chùa Vàng Thái Lan">
            <p>Từ thủ đô Bangkok sôi động đến những hòn đảo thiên đường, Thái Lan mang đến những trải nghiệm đa dạng, từ phiêu lưu khám phá đến nghỉ dưỡng thư giãn.</p>
        </section>

        <section class="section">
            <h2>Các điểm đến nổi bật</h2>
            <ul>
                <li><strong>Bangkok:</strong> Thủ đô sầm uất với Chùa Phật Ngọc (Wat Phra Kaew), Cung điện Hoàng gia, chợ nổi và các trung tâm mua sắm hiện đại.</li>
                <li><strong>Chiang Mai:</strong> "Đóa hồng phương Bắc" với những ngôi chùa cổ kính, trải nghiệm du lịch sinh thái và văn hóa bản địa độc đáo.</li>
                <li><strong>Phuket:</strong> Đảo lớn nhất Thái Lan, nổi tiếng với những bãi biển cát trắng, nước biển trong xanh và các hoạt động thể thao dưới nước.</li>
                <li><strong>Pattaya:</strong> Thành phố biển sôi động với các khu nghỉ dưỡng, hoạt động giải trí đêm và công viên nước.</li>
                <li><strong>Krabi:</strong> Tỉnh ven biển với những vách đá vôi ấn tượng, bãi biển Railay và các đảo đẹp như Koh Phi Phi.</li>
                <li><strong>Ayutthaya:</strong> Cố đô của Thái Lan, nơi lưu giữ nhiều tàn tích của các ngôi chùa và cung điện cổ xưa được UNESCO công nhận.</li>
            </ul>
            <img src="https://viettourist.com/resources/images/BLOG-PIC/Blog-thai-lan/banana-rock-beach.jpg" alt="Bãi biển Phuket">
        </section>

        <section class="section">
            <h2>Ẩm thực Thái Lan</h2>
            <p>Ẩm thực Thái Lan nổi tiếng thế giới với hương vị chua, cay, mặn, ngọt hòa quyện một cách tinh tế. Các món ăn thường sử dụng nhiều loại thảo mộc và gia vị tươi.</p>
            <ul>
                <li><strong>Pad Thái:</strong> Món mì xào quốc dân, với hương vị đặc trưng từ tôm, đậu phụ, giá đỗ và nước sốt me.</li>
                <li><strong>Tom Yum Goong:</strong> Canh tôm chua cay, thơm lừng mùi sả, riềng, lá chanh và ớt.</li>
                <li><strong>Cà ri xanh (Green Curry):</strong> Món cà ri với nước cốt dừa béo ngậy, vị cay nhẹ và hương thơm của rau thơm.</li>
                <li><strong>Xôi xoài (Mango Sticky Rice):</strong> Món tráng miệng nổi tiếng với xoài tươi, xôi dẻo và nước cốt dừa.</li>
                <li><strong>Gỏi đu đủ (Som Tum):</strong> Món gỏi trộn chua cay, thanh mát, là đặc sản của vùng Isan.</li>
                <li><strong>Thịt xiên nướng (Moo Ping):</strong> Thịt heo tẩm ướp nướng thơm lừng, món ăn đường phố rất được yêu thích.</li>
            </ul>
            <img src="https://hoctiengthai.com/uploads/images/padthainettinh-tuycuaamthuc-thai.jpg" alt="Pad Thái">
        </section>
    </div>
    <div class="footer">
        <p>&copy; 2025 Khám phá Thái Lan. Mọi quyền được bảo lưu.</p>
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