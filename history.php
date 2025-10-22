<?php
include "connect.php";
session_start();

$user_id = $_SESSION['user_id'];
$sql = "SELECT bookings.id, tours.name, bookings.customer_name, bookings.email, bookings.phone, bookings.num_people, bookings.note, bookings.booking_date , bookings.ngay_di
        FROM bookings 
        JOIN tours ON tours.id = bookings.tour_id 
        WHERE bookings.user_id = $user_id 
        ORDER BY bookings.booking_date DESC";


$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử đặt tour</title>
    <link rel="stylesheet" href="css/history.css">
    <style>
        a.delete {
    color: white;
    background-color: #e74c3c;
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold; 
}

a.delete:hover {
    background-color: #c0392b; 
}

    </style>
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
            <th>Ngày đặt</th>
            <th>Ngày và thời gian đi </th>
            <th>Chức năng</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['customer_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['num_people'] ?></td>
                <td><?php echo $row['note'] ?></td>
                <td><?php echo $row['booking_date'] ?></td>
                <td><?php echo $row['ngay_di'] ?></td>
                <td><a class="delete" href="delete_booking.php?id=<?= $row['id'] ?>">Huỷ Tour</a></td>

            </tr>
        <?php    } ?>
    </table>
    <div class="back-button">
        <a href="./index.php">Quay về trang chủ</a>
    </div>
</body>

</html>