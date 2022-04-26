<?php
require './connect.php';
//Người dùng bấm submit mới thực thi lưu dữ liệu
if(isset($_POST['btn-reg'])){
    // echo "<pre>";
    // print_r($_POST);
    // Lữu dữ liệu vào từng biến ( có dữ liệu or không)
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    //Kiểm tra dữ liệu có trống không? không --> insert vào db
    if(!empty($fullname) && !empty($username) && !empty($phone) && !empty($email) && !empty($password) && !empty($gender)){
        // insert dữ liệu
        // echo "<pre>";
        // print_r($_POST);

        $sql = "INSERT INTO `db_users` (`fullname`, `username` , `phone`, `email` , `password` , `gender`) VAlUES('$fullname','$username',
        '$phone','$email',md5('$password'),'$gender') " ;

        if($conn->query($sql) === TRUE ){
            echo "Thêm dữ liệu thành công!";
        }else{
            echo "Lỗi {$sql}".$connect->error;
        }
    }else{
        // nếu có ít nhất 1 phần từ rỗng => thông báo cho user : cần nhập đầy đủ thông tin trước khi đăng ký.
        echo "Bạn cần nhập đầy đủ thông tin trước khi nhấn nút đăng ký!";
    }

}

?>

<a href="../index.php">Quay lại trang chủ</a>