<?php include('header.php'); ?>

<body>
    <h1 style="color: red;padding:35px;text-decoration-line: underline;" class="text-center">ƯU ĐÃI</h1>
    <div class="d-flex justify-content-around">
        <?php
        $qry2 = mysqli_query($con, "select * from  tbl_event ");

        while ($m = mysqli_fetch_array($qry2)) {
        ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" href="event_about.php?id=<?php echo $m['event_id']; ?>" src="<?php echo $m['image']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="event_about.php?id=<?php echo $m['event_id']; ?>" style="text-decoration:none;"><?php echo $m['name']; ?></a></h5>
                    <a class="btn btn-primary" href="event_about.php?id=<?php echo $m['event_id']; ?>" src="<?php echo $m['image']; ?>">Xem chi tiết</a>
                </div>
            </div>
        <?php
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
</body>