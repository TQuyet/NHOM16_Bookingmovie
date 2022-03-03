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
                    <a class="nav-link" aria-current="page" href="pagemovie.php">Phim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ưu đãi </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Chọn rạp
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Hà nội</a></li>
                        <li><a class="dropdown-item" href="#">TP.Hồ Chí Minh</a></li>
                        <li><a class="dropdown-item" href="#">Đan phượng</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            <?php if (isset($_SESSION['user'])) {
                $us = mysqli_query($con, "select * from tbl_registration where user_id='" . $_SESSION['user'] . "'");
                $user = mysqli_fetch_array($us); ?><a href="profile.php"><?php echo $user['name']; ?></a><a href="logout.php">Logout</a><?php } else { ?><a href="login.php">Login</a> <a href="registration.php">Register</a><?php } ?>
        </div>
    </div>
</nav>
<div class="d-flex justify-content-around">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://files.betacorp.vn/files/media%2fimages%2f2022%2f02%2f25%2f5e46206e26fceaa2b3ed-143412-250222-80.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">The Batman</h5>
            <p class="card-text">Thể loại: Hành động, Tội Phạm
                Thời lượng: 181 phút</p>
            <a href="#" class="btn btn-primary">Mua vé</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://files.betacorp.vn/files/media%2fimages%2f2022%2f02%2f22%2fbo-cu-112311-220222-77.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Bồ Cũ</h5>
            <p class="card-text">Thể loại: Kinh dị, Tâm lý
                Thời lượng: 96 phút</p>
            <a href="#" class="btn btn-primary">Mua vé</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://files.betacorp.vn/files/media%2fimages%2f2021%2f10%2f27%2funtitled-3-135143-271021-25.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Bẫy Ngọt Ngào</h5>
            <p class="card-text">Thể loại: Tâm lý
                Thời lượng: 90 phút</p>
            <a href="#" class="btn btn-primary">Mua vé</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://files.betacorp.vn/files/media%2fimages%2f2021%2f11%2f18%2fz2944635011042-a4f7f110fa858e956bb8d6cff8465235-091059-181121-52.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Người Nhện: Không Còn Nhà</h5>
            <p class="card-text">Thể loại: Hành động, Phiêu lưu
                Thời lượng: 150 phút
            </p>
            <a href="#" class="btn btn-primary">Mua vé</a>
        </div>
    </div>

</div>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</div>
<!-- End of .container -->

</html>