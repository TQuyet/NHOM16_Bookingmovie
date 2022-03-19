<?php include('header.php');
$qry2 = mysqli_query($con, "select * from tbl_event where event_id='" . $_GET['id'] . "'");
$event = mysqli_fetch_array($qry2);
?>
<div class="d-flex justify-content-center">
    <div class="wrap">
        <div class="content-top" style="min-height:300px;padding:50px;">
            <div class="col-md-12 ">
                <div class="card mb-3" style="max-width: none,">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $event['image']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 35px;"><?php echo $event['name']; ?></h5>
                                <p class="p-link" style="font-size:15px"><b>Ngày áp dụng : </b><?php echo date('d-M-Y', strtotime($event['date'])); ?></p>
                                <p class="p-link" style="font-size:15px"><b>Thông tin : </b><br><?php echo $event['decs']; ?></br></p>
                                <p class="p-link" style="font-size:15px"><b>Điều Kiện & Điều Khoản: : </b><br><?php echo $event['proviso']; ?></br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>