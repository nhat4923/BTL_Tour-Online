<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Tìm kiếm Tour Du Lịch</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .tour-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 130px;
    }

    .tour-card {
      width: 260px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
      text-align: center;
      transition: transform 0.2s ease;
    }

    .tour-card:hover {
      transform: scale(1.05);
    }

    .tour-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }

    .tour-card h3 {
      color: green;
      font-size: 18px;
      margin: 10px 0 5px;
    }

    .tour-card .price {
      color: red;
      font-weight: bold;
      font-size: 17px;
    }

    .tour-card .location {
      color: #555;
      margin: 8px 0;
    }

    .tour-card .book-btn {
      display: inline-block;
      background: #28a745;
      color: white;
      padding: 10px 20px;
      margin: 12px 0 16px;
      border-radius: 20px;
      text-decoration: none;
      font-weight: bold;
    }

    .tour-card .book-btn:hover {
      background: #218838;
    }

    .no-result {
      text-align: center;
      color: red;
      font-size: 18px;
      font-weight: bold;
      margin-top: 150px;
    }

    /* Ẩn các phần khác nếu có */
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
</head>
<body>

<?php
if (isset($_GET['keyword'])) {
    $keyword = trim($_GET['keyword']);// trim= bỏ khoảng trắng 
    
    if ($keyword === '') {
        echo "<p class='no-result'> Vui lòng nhập từ khóa để tìm kiếm.</p>";
    } else {
        
        $sql = "SELECT * FROM tours WHERE name LIKE '%$keyword%'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            ?>
            <div class='tour-container'>
           <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class='tour-card'>
                    <img src='<?php echo $row['image_url']; ?>' alt='Ảnh tour'>
                    <h3><?php echo $row['name']; ?></h3>
                    <div class='price'><?php echo number_format($row['price'], 0, ',', '.'); ?> đ</div>
                    <div class='location'>Nơi đến: <?php echo $row['location']; ?></div>
                    <a href='book.php' class='book-btn'>ĐẶT NGAY</a>
                </div>
                <?php
                }?>
            </div>
        <?php } else {
            echo "<p class='no-result'> Không tìm thấy tour nào phù hợp.</p>";
        }
    }
}?>


</body>
</html>
