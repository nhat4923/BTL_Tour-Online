<?php
include('../connect.php');
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f3f4f6;
        padding: 30px;
        margin: 0;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 30px;
    }

    form {
        max-width: 500px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    form div {
        margin-bottom: 20px;
    }

    form p {
        margin: 0 0 6px 4px;
        font-weight: 600;
        color: #333;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="file"]:focus,
    select:focus {
        border-color: #3498db;
        outline: none;
    }

    button {
        width: 100%;
        background-color: #2da81dff;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #2980b9;
    }

    select {
        appearance: none;
        background-color: #fff;
    }
</style>

</head>

<body>
    <?php 

$id= $_GET['id'];
$sql="SELECT * FROM tours Where id = $id";
$result =mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);


?>
    <H1> Thêm tour mới</H1>
    <form action="xuly_update.php" method="post" >
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        </div>
        <div><p>Mã Tour</p>
            <input type="text" name="ma_tour" id="" value="<?php echo $row['ma_tour'] ?>" required>
        </div>
         <div><p>Tên Tour</p>
            <input type="text" name="name_tour" id="" value="<?php echo $row['name'] ?>"required>
        </div>
        <div><p>Mô tả</p>
            <input type="text" name="description" id="" value="<?php echo $row['description'] ?>"required>
        </div>
        <div><p>Địa điểm</p>
            <input type="text" name="location" id="" value="<?php echo $row['location'] ?>" required>
        </div>
        
        <div><p>Giá</p>
             <input type="number" name="price" value="<?php echo $row['price'] ?>"required>
        </div>
        <div>
    <p>Ảnh hiện tại</p>
    <img src="../<?php echo $row['image_url']; ?>" alt="Ảnh tour" style="max-width: 100%; height: auto; margin-bottom: 10px;">
    </div>

            <button type="submit"> Cập nhật</button>
    </form>


</body>
</html>