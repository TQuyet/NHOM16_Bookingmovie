<?php
include('config.php');
if (!$con) {
    die("Kết nối thất bại");
}
if (isset($_POST['btnluulai'])) {
    $idphim = $_POST['idphim'];
    $idrap = $_POST['idrap'];
    $tenphim = $_POST['tenphim'];
    $dienvien = $_POST['dienvien'];
    $tomtat = $_POST['tomtat'];
    $ngaychieu = $_POST['ngaychieu'];
    $hinhanh = $_POST['hinhanh'];

    $sql = "UPDATE tbl_movie SET t_id='$idrap', movie_name = '$tenphim', cast = '$dienvien', `desc`= '$tomtat', release_date = '$ngaychieu',image ='$hinhanh' WHERE movie_id='$idphim'";
    $ketqua = mysqli_query($con, $sql);
    if (!$ketqua) {
        header("location: error.php");
    } else {
        echo "Cập nhật phim thành công!";
    }



    mysqli_close($con);
}
