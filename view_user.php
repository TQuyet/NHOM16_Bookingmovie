<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Nhom16</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img class="navbar-brand" src="https://www.betacinemas.vn/Assets/Common/logo/logo.png"></img>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-around" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin_movie.php">Thêm phim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="view_user.php">Danh sách thành viên</a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            <a href="logout.php"> Đăng Xuất</a>
        </div>
    </div>
</nav>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">user type</th>
        </tr>
    </thead>
    <tbody>
        <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
        <?php
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost', 'root', '', 'bookingmovie');
        if (!$conn) {
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM tbl_login";
        $result = mysqli_query($conn, $sql);
        // Bước 03: Xử lý kết quả truy vấn
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['user_type']; ?></td>

                </tr>
        <?php
            }
        }
        ?>


    </tbody>
</table>