<?php 
   include('connect.php');
   $id_tour = $_GET['id'];
   $tour = "SELECT * FROM tours where id =$id_tour";
   $result = mysqli_query($conn, $tour);
   $row = mysqli_fetch_assoc($result);
    if (!$result || mysqli_num_rows($result) == 0) {
       echo '<p>Không thấy tour cần đặt</p>';
       exit;
    }
    if (isset($_POST['name'])
         && isset($_POST['email'])
         && isset($_POST['phone'])
         && isset($_POST['num_people'])
         && isset($_POST['note'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $num_people = $_POST['num_people'];
            $note = $_POST['note'];
              
            $sql = "INSERT INTO `bookings`(`tour_id`, `customer_name`, `email`, `phone`, `num_people`, `note`)
                      VALUES ( '$id_tour','$name','$email','$phone','$num_people','$note')";
            echo $sql;
            // mysqli_query($conn, $sql);
            // header('location: index.php');
          
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Tour</title>
</head>
<body>
    <h2> Đặt tour: <?php echo $row['name'] ?></h2>
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
            <input type="number" name="num_people"  min=1>
        </div>
        <div>
            <p>Ghi chú:</p>
            <textarea name="note" placeholder="Ghi chú thêm (nếu có)"></textarea>
        </div>
         <div>
            <button>Xác nhận đặt tour</button>
        </div>
    </form>
</body>
</html>