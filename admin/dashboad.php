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
  <h1>Admin</h1>
   <div class="add"><a href="../admin/add_tour.php">➕ Thêm tour mới</a></div>
   <div class="add"><a href="../index.php"> Trang chủ</a></div>
  <table>

    <head>
      <tr>
        <th>Mã Tour</th>
        <th>Tên</th>
        <th>Mô tả</th>
        <th>Địa điểm</th>
        <th>Loại</th>
        <th>Giá</th>
        <th>Ảnh</th>
        <th>Chức năng</th>
      </tr>
      <?php
      include('../connect.php');
      $sql = "SELECT * FROM `tours`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
      ?>
        <tr>
          <td><?php echo $row['ma_tour']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td class="description"><?php echo $row['description']; ?></td>
          <td><?php echo $row['location']; ?></td>
          <td><?php echo $row['type']; ?></td>
          <td><?php echo  number_format($row['price']); ?> VNĐ</td>
          <td> <img src="../<?php echo $row['image_url']; ?>" alt=""></td>
          <td>
            <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Xóa</a>
            <a class="update" href="update_tour.php?id=<?php echo $row['id']; ?>">Cập nhật</a>
          </td>


        </tr>


      <?php
      }
      ?>
    </head>

  </table>

</body>

</html>