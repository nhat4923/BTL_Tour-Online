<?php 
    include('../connect.php');
    if(!empty($_POST['ma_tour'])
         &&!empty($_POST['name_tour'])
        &&!empty($_POST['description'])
        &&!empty($_POST['location'])
        &&!empty($_POST['type'])
        &&!empty($_POST['price'])
      
        ){
            $matour = $_POST['ma_tour'];
            $mota = $_POST['description'];
            $ten_tour = $_POST['name_tour'];
            $dia_diem = $_POST['location'];
            $loai = $_POST['type'];
            $gia = $_POST['price'];
           

            //Xử lý ảnh
             #Bắt đầu xử lý thêm ảnh
            // Xử lý ảnh
            $target_dir = "img/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
            // Kiểm tra xem file ảnh có hợp lệ không
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    echo "File không phải là ảnh.";
                    $uploadOk = 0;
                }
            }
    
            // Kiểm tra nếu file đã tồn tại
            if (file_exists($target_file)) {
                echo "File này đã tồn tại trên hệ thông";
                $uploadOk = 2;
            }
    
            // Kiểm tra kích thước file
            if ($_FILES["fileToUpload"]["size"] > 2000000) {
                echo "File quá lớn";
                $uploadOk = 0;
            }
    
            // Cho phép các định dạng file ảnh nhất định
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
                $uploadOk = 0;
            }

            #Kết thúc xử lý ảnh
            if($uploadOk == 0){
                echo "File của bạn chưa được tải lên";
            }
            else{
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                $sql ="INSERT INTO `tours`( `ma_tour`, `name`, `description`, `location`, `type`, `price`, `image_url`) VALUES ('$matour','$ten_tour','$mota','$dia_diem','$loai','$gia','$target_file')";
            // echo $sql;
            mysqli_query($conn, $sql);
            // header('location: dashboad.php');
            echo "<script> 
                alert('Bạn đã thêm tour thành công');
                window.location.href ='dashboad.php'
            </script>";
          
            }
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tour</title>
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
    <H1> Thêm tour mới</H1>
    <form action="" method="post"  enctype="multipart/form-data">
        <div><p>Mã Tour</p>
            <input type="text" name="ma_tour" id="" placeholder="Nhập mã tour" required>
        </div>
         <div><p>Tên Tour</p>
            <input type="text" name="name_tour" id="" placeholder="Nhập tên tour" required>
        </div>
        <div><p>Mô tả</p>
            <input type="text" name="description" id="" placeholder="mô tả" required>
        </div>
        <div><p>Địa điểm</p>
            <input type="text" name="location" id="" placeholder="Địa điểm" required>
        </div>
        <div>
            <select name="type" id="">
                <option value="">-- Chọn loại tour --</option>
                  <option value="Trong nước">🇻🇳 Trong nước</option>
                <option value="Nước ngoài">✈️ Nước ngoài</option>
            </select><br>
        </div>
        <div><p>Giá</p>
             <input type="number" name="price" placeholder="Giá" required>
        </div>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit"> Thêm tour</button>
    </form>


</body>
</html>