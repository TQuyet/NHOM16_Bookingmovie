<?php include('header.php');
$qry2 = mysqli_query($con, "select * from tbl_movie where movie_id='" . $_GET['id'] . "'");
$movie = mysqli_fetch_array($qry2);
?>
<div class="card mb-3" style="max-width: none,">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo $movie['image']; ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie['movie_name']; ?></h5>
                <p class="p-link" style="font-size:15px"><b>Cast : </b><?php echo $movie['cast']; ?></p>
                <p class="p-link" style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y', strtotime($movie['release_date'])); ?></p>
                <p style="font-size:15px"><?php echo $movie['desc']; ?></p>
            </div>
        </div>
    </div>
</div>
<?php $s = mysqli_query($con, "select DISTINCT theatre_id from tbl_shows where movie_id='" . $movie['movie_id'] . "'");
if (mysqli_num_rows($s)) { ?>
    <table class="table table-hover table-bordered text-center">
        <h3 style="color:#444;" class="text-center">Lịch Chiếu</h3>

        <thead>
            <tr>
                <th class="text-center" style="font-size:16px;"><b>Rạp</b></th>
                <th class="text-center" style="font-size:16px;"><b>Suất chiếu</b></th>
            </tr>
        </thead>
        <?php



        while ($shw = mysqli_fetch_array($s)) {

            $t = mysqli_query($con, "select * from tbl_theatre where id='" . $shw['theatre_id'] . "'");
            $theatre = mysqli_fetch_array($t);
        ?>


            <tbody>
                <tr>
                    <td>
                        <?php echo $theatre['name'] . ", " . $theatre['place']; ?>
                    </td>
                    <td>
                        <?php $tr = mysqli_query($con, "select * from tbl_shows where movie_id='" . $movie['movie_id'] . "' and theatre_id='" . $shw['theatre_id'] . "'");
                        while ($shh = mysqli_fetch_array($tr)) {
                            $ttm = mysqli_query($con, "select  * from tbl_show_time where st_id='" . $shh['st_id'] . "'");
                            $ttme = mysqli_fetch_array($ttm);

                        ?>

                            <a href="check_login.php?show=<?php echo $shh['s_id']; ?>&movie=<?php echo $shh['movie_id']; ?>&theatre=<?php echo $shw['theatre_id']; ?>"><button class="btn btn-default"><?php echo date('h:i A', strtotime($ttme['start_time'])); ?></button></a>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
<?php
} else {
?>
    <h3 style="color:#444; font-size:23px;" class="text-center">Currently there are no any shows available!</h3>
    <p class="text-center">Please check back later!</p>
<?php
}
?>

</div>