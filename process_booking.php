<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
if (!$conn) {
    die("Kết nối thất bại");
}
if (isset($_POST['datve'])) {

    $sql = "INSERT INTO tbl_booking VALUES ('$idphim','$idrap','$tenphim','$dienvien','$tomtat','$ngaychieu', '$hinhanh')";

    $ketqua = mysqli_query($conn, $sql);

    if (!$ketqua) {
        header("location: error.php"); //Chuyển hướng lỗi
    } else {
        echo "them phim thanh cong !"; //Chuyển hướng lại Trang Quản trị
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
