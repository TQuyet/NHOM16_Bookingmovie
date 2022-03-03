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