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
<main>
    <div class="container">
        <h2 class="text-center text-primary mt-5">Thêm bộ phim mới</h2>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-add-employee.php" method="post">
            <div class="form-group">
                <label for="txtidphim">Id Phim</label>
                <input type="text" class="form-control" id="txtidphim" name="txtidphim" placeholder="">
            </div>

            <div class="form-group">
                <label for="txtidrap">Id Rạp</label>
                <input type="text" class="form-control" id="txtidrap" name="txtidrap" placeholder="">
            </div>

            <div class="form-group">
                <label for="txttenphim">Tên phim</label>
                <input type="text" class="form-control" id="txttenphim" name="txttenphim" placeholder="">

            </div>
            <div class="form-group">
                <label for="txtdienvien">Diễn viên</label>
                <input type="text" class="form-control" id="txtdienvien" name="txtdienvien" placeholder="">

            </div>
            <div class="form-group">
                <label for="txttomtat">Tóm tắt</label>
                <input type="text" class="form-control" id="txttomtat" name="txttomtat" placeholder="">

            </div>
            <div class="form-group">
                <label for="txttomtat">Ngày Chiếu (y-m-d)</label>
                <input type="text" class="form-control" id="txtngaychieu" name="txtngaychieu" placeholder="">

            </div>
            <div class="form-group">
                <label for="txthinhanh">Hình ảnh phim</label>
                <input type="text" class="form-control" id="txthinhanh" name="txthinhanh" placeholder="">
                <a href="process-add-movie.php" type="submit" class="btn btn-primary mt-3">Lưu lại</a>
        </form>
    </div>
</main>