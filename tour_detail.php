<?php
include('connect.php');
session_start();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM tours WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $tour = $result->fetch_assoc();
    } else {
        echo "Không tìm thấy tour!";
        exit;
    }
} else {
    echo "Thiếu ID tour!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Chi tiết tour - <?= $tour['name'] ?></title>
  <link rel="stylesheet" href="css/detail_tour.css">
</head>
<body>
  <div class="tour-detail">
    <h2 class="tour-title"><?= $tour['name'] ?></h2>
    <div class="tour-content">
      <div class="tour-image">
        <img src="<?= $tour['image_url'] ?>" alt="<?= $tour['name'] ?>">
      </div>
      <div class="tour-info">
        <p><b>Mã tour:</b> <?= $tour['ma_tour'] ?></p>
        <p><b>Địa điểm:</b> <?= $tour['location'] ?></p>
        <p><b>Loại tour:</b> <?= $tour['type'] ?></p>
        <p><b>Giá:</b> 
          <span class="price"><?= number_format($tour['price'], 0, ',', '.') ?> VND</span>
        </p>
        <p><b>Mô tả:</b></p>
        <p class="description"><?= $tour['description'] ?></p>

        <a href="book_tour.php?id=<?= $tour['id'] ?>" class="btn">Đặt ngay</a>
        <a href="index.php" class="back-link">⬅ Quay lại trang chủ</a>
      </div>
    </div>
  </div>
</body>

</html>