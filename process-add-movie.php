<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
if (!$conn) {
    die("Kết nối thất bại");
}
if (isset($_POST['btnthem'])) {
    $idphim = $_POST['txtidphim'];
    $idrap = $_POST['txtidrap'];
    $tenphim = $_POST['txttenphim'];
    $dienvien = $_POST['txtdienvien'];
    $tomtat = $_POST['txttomtat'];
    $ngaychieu = $_POST['txtngaychieu'];
    $hinhanh = $_POST['txthinhanh'];

    $sql = "INSERT INTO tbl_movie VALUES ('$idphim','$idrap','$tenphim','$dienvien','$tomtat','$ngaychieu', '$hinhanh')";

    $ketqua = mysqli_query($conn, $sql);

    if (!$ketqua) {
        header("location: error.php"); //Chuyển hướng lỗi
    } else {
        echo "them phim thanh cong !"; //Chuyển hướng lại Trang Quản trị
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
