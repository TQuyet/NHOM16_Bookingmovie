<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
if (!$conn) {
    die("Kết nối thất bại");
}
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}

extract($_POST);

if (isset($_POST['datve'])) {
    $ticketid = "beta" . rand(1000000, 9999999);
    $screenid = $_POST['screen'];
    $noseat = $_POST['number'];
    $giave = $_POST['amount'];
    $ngaychieu = $_POST['date'];

    $sql = "INSERT INTO tbl_bookings VALUES ( NULL,'$ticketid','" . $_SESSION['theatre'] . "','" . $_SESSION['user'] . "','" . $_SESSION['show'] . "','$screenid', '$noseat','$giave', '$ngaychieu')";
    $ketqua = mysqli_query($conn, $sql);

    if (!$ketqua) {
        header("location: error.php"); //Chuyển hướng lỗi
    } else {
        echo "datve thanh cong !"; //Chuyển hướng lại Trang Quản trị
    }


    // Bước 03: Đóng kết nối
    mysqli_close($conn);
}
