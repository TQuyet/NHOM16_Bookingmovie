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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                    <a class="nav-link" href="adminn.php">Quản lý phim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_event.php">Thêm ưu đãi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="view_user.php">Danh sách thành viên</a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            Xin chào Admin <a style="margin-left:10px;color:red" href="logout.php"> Đăng Xuất</a>
        </div>
    </div>
</nav>
<div class="d-flex justify-content-around">
    <?php
    $qry2 = mysqli_query($con, "select * from  tbl_movie ");

    while ($m = mysqli_fetch_array($qry2)) {
    ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" href="about.php?id=<?php echo $m['movie_id']; ?>" src="<?php echo $m['image']; ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration:none;"><?php echo $m['movie_name']; ?></a></h5>
                Diễn viên : <p class="card-text"><?php echo $m['cast']; ?>
                </p>
                <a class="btn btn-primary" href="update_movie.php?id=<?php echo $m['movie_id']; ?>">Sửa</a>
                <a id="delete" class="btn btn-danger" href="process_delete_movie.php?id=<?php echo $m['movie_id']; ?>">Xóa phim</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal">
                    Xóa Phim1
                </button>

                <!-- Modal -->
                <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cảnh báo !!!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Phim đã xóa không thể khôi phục !!!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="button" id="delete" name="delete" class="btn btn-danger">Vẫn xóa</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</div>
<!-- End of .container -->

</html>