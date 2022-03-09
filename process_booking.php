<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookingmovie1');
if (!$conn) {
    die("Kết nối thất bại");
}

    if (isset($_POST['datve'])) {
        $screenid = $_POST['screen'];
        $noseat = $_POST['number'];
        $giave = $_POST['amount'];
        $ngaychieu = $_POST['date'];

        $sql = "INSERT INTO tbl_bookings ( screen_id, no_seats, amount, ticket_date) VALUES ( '$screenid', '$noseat','$giave', '$ngaychieu')";

        $ketqua = mysqli_query($conn, $sql);

        if (!$ketqua) {
            header("location: error.php"); //Chuyển hướng lỗi
        } else {
            echo "Thêm phim thành công !"; //Chuyển hướng lại Trang Quản trị
            header("location:pagemovie.php");
        }


        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }


