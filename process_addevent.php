<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
if (!$conn) {
    die("Kết nối thất bại");
}
if (isset($_POST['btnthem'])) {
    $event = $_POST['txtevent'];
    $date = $_POST['txtdate'];
    $tomtat = $_POST['txttomtat'];
    $dieukhoan = $_POST['txtdieukhoan'];
    $hinhanh = $_POST['txthinhanh'];

    $sql = "INSERT INTO tbl_event VALUES (null,'$event','$date','$tomtat','$dieukhoan', '$hinhanh')";

    $ketqua = mysqli_query($conn, $sql);

    if (!$ketqua) {
        header("location: error.php");
    } else {
        echo "them uu dai thanh cong !";
    }



    mysqli_close($conn);
}
