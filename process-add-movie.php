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
        header("location: error.php");
    } else {
        echo "them phim thanh cong !";
    }



    mysqli_close($conn);
}
