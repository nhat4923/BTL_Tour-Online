<?php 
   include('connect.php');
   session_start();
   if (!isset($_SESSION['username'])) {
    header("Location: manager/login.php");
    exit;
}
   $id_tour = $_GET['id'];
   $tour = "SELECT * FROM tours where id =$id_tour";
   $result = mysqli_query($conn, $tour);
   $row = mysqli_fetch_assoc($result);
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
            $user_id = $_SESSION['user_id'];
              
            $sql = "INSERT INTO `bookings`(`tour_id`,`user_id`, `customer_name`, `email`, `phone`, `num_people`, `note`)
                      VALUES ( '$id_tour','$user_id', '$name','$email','$phone','$num_people','$note')";
            mysqli_query($conn, $sql);
            echo "<script> 
                alert('Bạn đã đặt tour thành công');
                window.location.href ='index.php'
            
            </script>";
          
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