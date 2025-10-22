<?php
include "connect.php";

// Lấy dữ liệu lọc từ GET
$min_price = $_GET['min_price'] ?? 0;
$max_price = $_GET['max_price'] ?? 0;
$price_range = $_GET['price_range'] ?? "";

$sql = "SELECT * FROM tours WHERE 1=1";

// Nếu nhập giá thấp nhất
if ($min_price > 0) {
    $sql .= " AND price >= $min_price";
}

// Nếu nhập giá cao nhất
if ($max_price > 0) {
    $sql .= " AND price <= $max_price";
}

// Nếu chọn mức giá cố định
if ($price_range == "1") {
    $sql .= " AND price < 1000000";
} elseif ($price_range == "2") {
    $sql .= " AND price BETWEEN 1000000 AND 3000000";
} elseif ($price_range == "3") {
    $sql .= " AND price BETWEEN 3000000 AND 5000000";
} elseif ($price_range == "4") {
    $sql .= " AND price > 5000000";
}

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kết quả lọc tour</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .foreign-tour-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
            justify-content: center;
        }

        .foreign-tour-item {
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .foreign-tour-item:hover {
            transform: scale(1.05);
        }

        .foreign-tour-item img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .foreign-tour-item h3 {
            color: green;
            margin: 10px 0;
            font-size: 18px;
        }

        .foreign-tour-price {
            color: red;
            font-weight: bold;
        }

        .btn a {
            display: inline-block;
            padding: 8px 15px;
            background: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn a:hover {
            background: #218838;
        }

        .no-result {
            text-align: center;
            color: red;
            font-weight: bold;
            font-size: 18px;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center; margin-top:20px;">Kết quả lọc tour</h2>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <div class="foreign-tour-list">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="foreign-tour-item">
                    <a href="tour_detail.php?id=<?= $row['id'] ?>">
                        <img src="<?= $row['image_url'] ?>" alt="<?= $row['name'] ?>" />
                        <h3><?= $row['name'] ?></h3>
                    </a>
                    <p class="foreign-tour-price"><?= number_format($row['price'], 0, ',', '.') ?>đ</p>
                    <p class="foreign-tour-destination">Nơi đến: <?= $row['location'] ?></p>
                    <button class="btn">
                        <a href="./book_tour.php?id=<?= $row['id'] ?>">ĐẶT NGAY</a>
                    </button>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p class="no-result">Không tìm thấy tour phù hợp với yêu cầu lọc.</p>
    <?php endif; ?>

    <div style="text-align:center; margin:20px;">
        <a href="index.php">⬅ Quay lại trang chủ</a>
    </div>
</body>

</html>