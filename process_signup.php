<?php
      
    $conn = mysqli_connect('localhost', 'root', '', 'bookingmovie');
    if(!$conn){
        die("Kết nối thất bại");
    }


    if (isset($_POST['btnsignup'])) {

        $user = $_POST['username'];
        $email = $_POST['email'];
        $pass1 = $_POST['password1'];
        $pass2 = $_POST['password2'];
            
    if(!$conn){
        die("Kết nối thất bại");
    }
    $sql01 = "SELECT * FROM tbl_login WHERE username = '$email'";


    $result01 = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result01) > 0){
        $error = "Email đã tồn tại";
        header("location: signup.php?error=$error");
        }
        if($pass1 != $pass2){
            $error = "Đăng ký không thành công!";
            header("location: signup.php?error=$error");;
        }
        else{
        $pass_md5 = md5($pass1);
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql02 = "INSERT INTO tbl_login (username, password) VALUES('$email', '$pass_hash')";
        $result02 = mysqli_query($conn,$sql02);

        if($result02 == true){
            header("location:login.php");
        }else{
            $error = "Không thể đăng kí được tài khoản.";
            header("location: Signup.php?error=$error");
        }
    }

    mysqli_close($conn);
 }

