<?php
include('config.php');
$qry2 = mysqli_query($con, "select * from tbl_movie where movie_id='" . $_GET['id'] . "'");
$movie = mysqli_fetch_array($qry2);
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
                    <a class="nav-link" href="adminn.php">Trang Quản lý</a>
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
        <h3 class="text-center text-primary mt-5">Cập nhật Thông Tin Phim ( <?php echo $movie['movie_name']; ?>)</h3>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process_update_movie.php" method="post">
            <div class="form-group">
                <label for="txtidphim">Id Phim</label>
                <input type="text" class="form-control" id="txtidphim" name="txtidphim" placeholder="" value="<?php echo $movie['movie_id']; ?>">
            </div>

            <div class="form-group">
                <label for="txtidrap">Id Rạp</label>
                <input type="text" class="form-control" id="txtidrap" name="txtidrap" placeholder="" value="<?php echo $movie['t_id']; ?>">
            </div>

            <div class="form-group">
                <label for="txttenphim">Tên phim</label>
                <input type="text" class="form-control" id="txttenphim" name="txttenphim" placeholder="" value="<?php echo $movie['movie_name']; ?>">

            </div>
            <div class="form-group">
                <label for="txtdienvien">Diễn viên</label>
                <input type="text" class="form-control" id="txtdienvien" name="txtdienvien" placeholder="" value="<?php echo $movie['cast']; ?>">

            </div>
            <div class="form-group">
                <label for="txttomtat">Tóm tắt</label>
                <input type="text" class="form-control" id="txttomtat" name="txttomtat" placeholder="" value="<?php echo $movie['desc']; ?>">

            </div>
            <div class="form-group">
                <label for="txttomtat">Ngày Chiếu (y-m-d)</label>
                <input type="text" class="form-control" id="txtngaychieu" name="txtngaychieu" placeholder="" value="<?php echo $movie['release_date']; ?>">

            </div>
            <div class="form-group">
                <label for="txthinhanh">Hình ảnh phim</label>
                <input type="text" class="form-control" id="txthinhanh" name="txthinhanh" placeholder="" value="<?php echo $movie['image']; ?>">
                <button type="submit" name="btnluulai" class="btn btn-primary" value="luu lai">Lưu Lại</button>
        </form>
    </div>
</main>