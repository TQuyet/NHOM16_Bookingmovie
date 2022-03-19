<?php
$idphim = $_GET['id'];
echo $idphim;

$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
$sql = "DELETE FROM tbl_movie WHERE movie_id = '$idphim'";

$ketqua = mysqli_query($conn, $sql);

if (!$ketqua) {
    header("location: error.php");
} else {
    echo "Đã xóa phim !";
}
mysqli_close($conn);
