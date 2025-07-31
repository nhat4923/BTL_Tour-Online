<?php
include('../connect.php');
$id = $_GET['id'];

$delete_sql = "DELETE FROM `tours` WHERE id=$id ";
mysqli_query($conn, $delete_sql);
// header('location: dashboad.php');
echo "<script> 
                alert('Bạn đã xóa thành công');
                window.location.href ='dashboad.php'
            </script>";
?>
          

