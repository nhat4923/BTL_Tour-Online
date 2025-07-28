<?php 
 include "connect.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$user_id = $_SESSION['user_id'];
  $sql =" SELECT `name`, `customer_name`, `email`, `phone`, `num_people`, `note`, `booking_date` FROM `bookings` 
  JOIN tours on tours.id = bookings.id 
  WHERE bookings.user_id = $user_id  ";

  $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử đặt tour</title>
    <link rel="stylesheet" href="css/history.css">
</head>
<body>
    <table>
        <caption>Lịch sử đặt tour</caption>
        <tr>
            <th>Tên tour</th>
            <th>Tên người đặt</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Số người</th>
            <th>Ghi chú</th>
            <th>Thời gian và ngày đặt </th>
        </tr>
        <?php while($row = mysqli_fetch_array($result)){
         ?>
            <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['customer_name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['phone']?></td>
                <td><?php echo $row['num_people']?></td>
                <td><?php echo $row['note']?></td>
                <td><?php echo $row['booking_date']?></td>
            </tr>
         <?php    } ?>
    </table>
    <div class="back-button">
        <a href="./index.php">Quay về trang chủ</a>
    </div>
</body>
</html>