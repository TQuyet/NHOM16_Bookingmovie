<?php
// Xử lý giá trị GỬI TỚI

$idphim = $_POST['txtidphim'];
$idrap = $_POST['txtidrap'];
$tenphim = $_POST['txttenphim'];
$dienvien = $_POST['txtdienvien'];
$tomtat = $_POST['txttomtat'];
$ngaychieu = $_POST['txtngaychieu'];
$hinhanh = $_POST['txthinhanh'];

// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn
$sql = "INSERT INTO tbl_movie (movie_id, t_id, movie_name, cast, desc, release_date, image) VALUES ('$idphim','$idrap','$tenphim','$dienvien','$tomtat','$ngaychieu', '$hinhanh')";
// echo $sql;
$ketqua = mysqli_query($conn, $sql);


// Bước 03: Đóng kết nối
mysqli_close($conn);
