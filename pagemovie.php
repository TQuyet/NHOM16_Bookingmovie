<?php
include('config.php');
include('header.php');
?>
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
                <a class="btn btn-primary" href="about.php?id=<?php echo $m['movie_id']; ?>" src="<?php echo $m['image']; ?>">Mua vé</a>
            </div>
        </div>

    <?php
    }
    ?>


    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</div>
<!-- End of .container -->

</html>