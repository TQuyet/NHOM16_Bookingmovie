<?php
include('config.php');
if (!$con) {
    die("Kết nối thất bại");
}
if (isset($_POST['btnsave'])) {
    $name = $_POST['ten'];
    $ngaysinh = $_POST['ns'];
    $gioitinh = $_POST['gioitinh'];
    $phone = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $image = $_POST['hinhanh'];

    $sql = "UPDATE tbl_login SET name ='$name', date_of_birth = '$ngaysinh', gender = '$gioitinh', phone = '$phone', address = '$diachi', image ='$image' WHERE user_id ='" . $_SESSION['user'] . "'";
    $ketqua = mysqli_query($con, $sql);
    if (!$ketqua) {
        header("location: error.php");
    } else {
        echo "Cập nhật thông tin thành công!";
    }


    mysqli_close($con);
}
