<?php include('header.php');
if (!isset($_SESSION['user'])) {
	header('location:login.php');
}
$qry2 = mysqli_query($con, "select * from tbl_movie where movie_id='" . $_SESSION['movie'] . "'");
$movie = mysqli_fetch_array($qry2);
?>
<div class="d-flex flex-row">
	<div class="card" style="width: 18rem;">
		<img src="<?php echo $movie['image']; ?>" alt="" />
		<div class="card-body">
			<h3 class="card-text"><?php echo $movie['movie_name']; ?></h3>
			<p class="card-text"> Ngày chiếu: <?php echo date('d-M-Y', strtotime($movie['release_date'])); ?></p>
		</div>
	</div>
	<table class="table table-hover table-bordered text-center">
		<?php
		$s = mysqli_query($con, "select * from tbl_shows where s_id='" . $_SESSION['show'] . "'");
		$shw = mysqli_fetch_array($s);

		$t = mysqli_query($con, "select * from tbl_theatre where id='" . $shw['theatre_id'] . "'");
		$theatre = mysqli_fetch_array($t);
		?>
		<tr>
			<td class="col-md-3">
				Rạp
			</td>
			<td>
				<?php echo $theatre['name'] . ", " . $theatre['place']; ?>
			</td>
		</tr>
		<tr>

			<?php
			$ttm = mysqli_query($con, "select  * from tbl_show_time where st_id='" . $shw['st_id'] . "'");

			$ttme = mysqli_fetch_array($ttm);

			$sn = mysqli_query($con, "select  * from tbl_screens where screen_id='" . $ttme['screen_id'] . "'");

			$screen = mysqli_fetch_array($sn);

			?>

		</tr>
		<tr>
			<td>
				Ngày chiếu
			</td>
			<td>
				<?php
				if (isset($_GET['date'])) {
					$date = $_GET['date'];
				} else {
					if ($shw['start_date'] > date('Y-m-d')) {
						$date = date('Y-m-d', strtotime($shw['start_date'] . "-1 days"));
					} else {
						$date = date('Y-m-d');
					}
					$_SESSION['dd'] = $date;
				}
				?>
				<div class="col-md-12 text-center" style="padding-bottom:20px">
					<?php if ($date > $_SESSION['dd']) { ?><a href="booking.php?date=<?php echo date('Y-m-d', strtotime($date . "-1 days")); ?>"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-left"></i></button></a> <?php } ?><span style="cursor:default" class="btn btn-default"><?php echo date('d-M-Y', strtotime($date)); ?></span>
					<?php if ($date != date('Y-m-d', strtotime($_SESSION['dd'] . "+4 days"))) { ?>
						<a href="booking.php?date=<?php echo date('Y-m-d', strtotime($date . "+1 days")); ?>"><button class="btn btn-default"><i class="glyphicon glyphicon-chevron-right"></i></button></a>
					<?php }
					$av = mysqli_query($con, "select sum(no_seats) from tbl_bookings where show_id='" . $_SESSION['show'] . "' and ticket_date='$date'");
					$avl = mysqli_fetch_array($av);
					?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				Giờ chiếu
			</td>
			<td>
				<?php echo date('h:i A', strtotime($ttme['start_time'])); ?>
			</td>
		</tr>
		<tr>
			<td>
				Số ghế
			</td>
			<td>
				<form action="process_booking.php" method="post">
					<input type="hidden" name="screen" value="<?php echo $screen['screen_id']; ?>" />
					<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats'] - $avl[0]; ?>" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats" />
					<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge']; ?>" />
					<input type="hidden" name="date" value="<?php echo $date; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				Thành tiền
			</td>
			<td id="amount" style="font-weight:bold;font-size:18px">
				<?php echo $screen['charge']; ?> VND
			</td>
		</tr>
		<tr>
			<td colspan="2"><?php if ($avl[0] == $screen['seats']) { ?><button type="button" class="btn btn-danger" style="width:100%">House Full</button><?php } else { ?>
					<button class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:50%">Đặt ngay</button>
					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									...
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				</form>
			</td>
		</tr>
		<table>
			<tr>
				<td></td>
			</tr>
		</table>

</div>
<script type="text/javascript">
	$('#seats').change(function() {
		var charge = <?php echo $screen['charge']; ?>;
		amount = charge * $(this).val();
		$('#amount').html(amount + "VND");
		$('#hm').val(amount);
	});
</script>