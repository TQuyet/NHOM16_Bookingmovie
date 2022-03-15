<?php

use function PHPSTORM_META\type;

$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
if (!$conn) {
    die("Kết nối thất bại");
}

if (isset($_POST['btnsignup'])) {
    $userid = rand(10, 10000);
    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if (!$conn) {
        die("Kết nối thất bại");
    }

    $data = $_POST;
    if (
        empty($data['email']) ||
        empty($data['password1']) ||
        empty($data['password2'])
    ) {

        die('Hãy điền đầy đủ thông tin vào chỗ trống !!');
    }

    if ($data['password1'] !== $data['password2']) {
        die('Mật khẩu không trùng khớp !!');
    }

    $sql01 = "SELECT * FROM tbl_login WHERE username = '$email'";
    $result = mysqli_query($conn, $sql01);
    if (mysqli_num_rows($result) > 0)
    {
        die('Email đã tồn tại !!');

    } else {
        $sql02 = "INSERT INTO tbl_login (user_id,username, password,user_type) VALUES('$userid','$email', '$pass1',1)";
        $result02 = mysqli_query($conn, $sql02);
        if ($result02 == true) {
            header("location:login.php");
        } else {
            $error = "Không thể đăng kí được tài khoản.";
            header("location: Signup.php?error=$error");
        }

        mysqli_close($conn);
    }
}
