<?php
    require './connect.php';

    $u = $_POST['username'];
    $p = $_POST['password'];

    // truy vấn

    $sql = "select * 
            from `db_users` 
            where username='$u' and password=md5('$p')";

    // thực thi truy vấn


    if(mysqli_num_rows($conn->query($sql)) > 0){
        echo "<h1>Đăng nhập thành công!</h1>";
    }else{
        echo "<h2>Đăng nhập thất bại!</h2>";
    }

?>

    