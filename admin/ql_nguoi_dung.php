<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    h1 {
      text-align: center;
      color: #2c3e50;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      /* padding: 4px; */
      border: 1px solid #ddd;
    }

    th {
      background-color: #1dae66;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }
   .description{
    width: 400px;
   }
    img {
      width: 120px;
      height: 80px;
    }

    .delete,
    .update {
      text-decoration: none;
      color: black;
      font-weight: bolder;
      padding: 8px;


    }

    .add {
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid black;
      width: 150px;
      background-color: #1dae66;
    }

    .add a {
      text-decoration: none;
      color: white;
    }

    .add:hover {
      cursor: pointer;
      background-color: #9cedc5ff;
    }

    .delete:hover {
      border-radius: 10px;
      color: white;
      background-color: red;
    }

    .update:hover {
      color: white;
      border-radius: 10px;
      background-color: #1dae66;
    }
  </style>
</head>

<body>
  <h1>Quản lí người dùng</h1>
  <table>

    <head>
      <tr>
        <th>Tên người dùng</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Số người</th>
        <th>Ghi chú</th>
        <th>Ngày đặt tour</th>

      </tr>
      <?php
      include('../connect.php');
      $sql = "SELECT   `customer_name`, `email`, `phone`, `num_people`, `note`, `booking_date` FROM `bookings` JOIN users ON users.id = bookings.user_id;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
      ?>
        <tr>
          <td><?php echo $row['customer_name']; ?></td>
          <td class="description"><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['num_people']; ?></td>
          <td><?php echo $row['note']; ?> </td>
          <td> <?php echo $row['booking_date']; ?></td>
        </tr>
      <?php
      }
      ?>
    </head>

  </table>

</body>

</html>