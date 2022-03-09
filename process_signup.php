<?php

use function PHPSTORM_META\type;

$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
if (!$conn) {
    die("Kết nối thất bại");
}

if (isset($_POST['btnsignup'])) {

    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if (!$conn) {
        die("Kết nối thất bại");
    }
    $sql01 = "SELECT * FROM tbl_login WHERE username = '$email'";

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

    } else {
        $sql02 = "INSERT INTO tbl_login (username, password) VALUES('$email', '$pass1')";
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
