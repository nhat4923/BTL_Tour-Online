<?php 
include('connect.php');
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: manager/login.php");
    exit;
}

// Lấy danh sách booking (nếu cần)
$sql_books = "SELECT bookings.id, tours.name AS tour_name, bookings.customer_name, bookings.email, bookings.phone, bookings.num_people, bookings.note, bookings.booking_date 
              FROM bookings 
              JOIN tours ON tours.id = bookings.tour_id";
$result_books = mysqli_query($conn, $sql_books);

// Lấy thông tin tour cần đặt
$id_tour = $_GET['id'];
$tour = "SELECT * FROM tours WHERE id = $id_tour";
$result = mysqli_query($conn, $tour);
$row = mysqli_fetch_assoc($result);

$error = ""; // biến lưu thông báo lỗi

// Xử lý đặt tour
if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['phone']) &&
    isset($_POST['num_people']) &&
    isset($_POST['note']) &&
    isset($_POST['ngay_di'])
) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $num_people = $_POST['num_people'];
    $note = $_POST['note'];
    $user_id = $_SESSION['user_id'];
    $ngay_di = $_POST['ngay_di'];
    $ngay_dat = date("Y-m-d H:i:s");// ngày đặt là hôm nay

    if (strtotime($ngay_di) <= strtotime($ngay_dat)) {
        $error = "❌ Ngày đi phải sau ngày đặt.";
    } else {
        $sql = "INSERT INTO `bookings`(`tour_id`, `user_id`, `customer_name`, `email`, `phone`, `num_people`, `note`, `booking_date`, `ngay_di`)
                VALUES ('$id_tour','$user_id', '$name','$email','$phone','$num_people','$note', '$ngay_dat', '$ngay_di')";
        mysqli_query($conn, $sql);
        echo "<script> 
            alert('✅ Bạn đã đặt tour thành công!');
            window.location.href ='index.php';
        </script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Tour</title>
    <link rel="stylesheet" href="./css/book_tour.css">
</head>
<body>
    <h2> Đặt tour: <?php echo $row['name'] ?></h2>

    <!-- Thông báo lỗi -->
    <?php if (!empty($error)): ?>
        <p style="text-align:center; color: red; font-weight: bold;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        <div>
            <p>Tên khách hàng :</p>
            <input type="text" name="name" placeholder="Tên khách hàng" required>
        </div>
        <div>
            <p>Email :</p>
            <input type="email" name="email" placeholder="VD : name@gmail.com" required>
        </div>
         <div>
            <p>Phone :</p>
            <input type="number" name="phone" placeholder="VD : 0912345678" required>
        </div>
        <div>
            <p>Số lượng người :</p>
            <input type="number" name="num_people" min=1>
        </div>
        <div>
            <p>Ghi chú:</p>
            <textarea name="note" placeholder="Ghi chú thêm (nếu có)"></textarea>
        </div>
         <div>
            <p>Ngày và thời gian đi :</p>
            <input name="ngay_di" type='datetime-local' required>
        </div>
         <div>
            <button type="submit">Xác nhận đặt tour</button>
        </div>
    </form>
</body>
</html>
