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
        <img href="index.php" class="navbar-brand" src="https://www.betacinemas.vn/Assets/Common/logo/logo.png"></img>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-around" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="pagemovie.php">Phim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="event.php">Ưu đãi </a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            <?php if (isset($_SESSION['user'])) {
                $us = mysqli_query($con, "select * from tbl_login where user_id='" . $_SESSION['user'] . "'");
                $user = mysqli_fetch_array($us); ?><a style="text-decoration-line:none" href="profile.php">Xin chào <?php echo $user['username']; ?></a><a href="logout.php" style="padding-left:10px;color:red">Đăng Xuất</a><?php } else { ?><a href="login.php">ĐĂNG NHẬP</a><?php } ?>
        </div>
    </div>
</nav>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</div>
<!-- End of .container -->

</html>