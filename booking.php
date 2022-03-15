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
				<?php echo date('d-M-Y', strtotime($movie['release_date'])); ?>
			</td>
		</tr>
		<tr>
			<td>
				Giờ chiếu
			</td>
			<td>
				<?php echo (($ttme['start_time'])); ?>
			</td>
		</tr>
		<tr>
			<td>
				Số ghế
			</td>
			<td>
				<form action="process_booking.php" method="post">
					<input type="hidden" name="screen" value="<?php echo $screen['screen_id']; ?>" />
					<input type="number" name="number" required min="1" max="5">
					<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge']; ?>" />
					<input type="hidden" name="date" value="<?php echo $date = date('Y-m-d'); ?>" />
			</td>
		</tr>
		<tr>
			<td>
				Thành tiền
			</td>
			<td id="amount" name="amount" style="font-weight:bold;font-size:18px">
				<?php echo $screen['charge']; ?> VND/1 vé
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button name="datve" class="btn btn-info" style="width:50%">Đặt vé</button>
				<!-- Modal -->
				</form>
			</td>
		</tr>
		<table>
			<tr>
				<td></td>
			</tr>
		</table>

</div>