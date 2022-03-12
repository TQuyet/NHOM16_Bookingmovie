<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
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

    $sql = "UPDATE btl_movie SET  t_id='$idrap', movie_name = '$tenphim', cast = '$dienvien', desc ='$tomtat', release_date = '$ngaychieu',image ='$hinhanh' WHERE movie_id='$idphim'";
    echo $sql;
    // $ketqua = mysqli_query($conn, $sql);


    // if (!$ketqua) {
    //     header("location: error.php");
    // } else {
    //     echo "them phim thanh cong !";
    // }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
