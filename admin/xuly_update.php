<?php
include('../connect.php');
$id=$_POST['id'];
$ma_tour=$_POST['ma_tour'];
$name_tour=$_POST['name_tour'];
$description=$_POST['description'];
$location=$_POST['location'];
$price=$_POST['price'];
$sql_update="UPDATE `tours` SET `ma_tour`='$ma_tour',`name`='$name_tour',`description`='$description',`location`='$location',`price`='$price' WHERE id='$id'";
mysqli_query($conn,$sql_update);
// header('location: dashboad.php');
echo "<script> 
                alert('Bạn đã sửa tour thành công');
                window.location.href ='dashboad.php'
            </script>";


?>