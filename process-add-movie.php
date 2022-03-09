<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie');
if (!$conn) {
    die("Kết nối thất bại");
}
if (isset($_POST['btnluulai'])) {
    $idphim = $_POST['txtidphim'];
    $idrap = $_POST['txtidrap'];
    $tenphim = $_POST['txttenphim'];
    $dienvien = $_POST['txtdienvien'];
    $tomtat = $_POST['txttomtat'];
    $ngaychieu = $_POST['txtngaychieu'];
    $hinhanh = $_POST['txthinhanh'];

    $sql = "INSERT INTO tbl_movie (movie_id, t_id, movie_name, cast, desc, release_date, image) VALUES ('$idphim','$idrap','$tenphim','$dienvien','$tomtat','$ngaychieu', '$hinhanh')";

    $ketqua = mysqli_query($conn, $sql);

    if (!$ketqua) {
        header("location: error.php");
    } else {
        header("location: admin_movie.php");
    }




    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
