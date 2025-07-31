<?php
include('connect.php');
$id = $_GET['id'];

$delete_sql = "DELETE FROM `bookings` WHERE id=$id ";
mysqli_query($conn, $delete_sql);
// header('location: dashboad.php');
echo "<script> 
                alert('Bạn đã xóa thành công');
                window.location.href ='history.php'
            </script>";
// echo $delete_sql
?>
          
