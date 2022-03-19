<?php include('header.php');
if (!isset($_SESSION['user'])) {
	$qry2 = mysqli_query($con, "select user_id from tbl_login where user_id='" . $_GET['id'] . "'");
	$user = mysqli_fetch_array($qry2);
}
?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<div class="section group">
				<div class="about span_1_of_2">
					<h2 style="color:black;" class="text-center">Thông tin người dùng</h2>
					<?php $s = mysqli_query($con, "select DISTINCT user_id from tbl_login where user_id='" . $_SESSION['user'] . "'");
					if (mysqli_num_rows($s)) {
					?>
						<div class="card mb-3" style="max-width: none,">
							<div class="row g-0">
								<div class="col-md-6">
									<img width="200" height="200" src="<?php echo $user['image']; ?>" class="img-fluid rounded ms-auto d-block" alt="...">
								</div>
								<div class="col-md-6">
									<div class="card-body">
										<p class="p-link" style="font-size:15px"><b>Tên : </b><?php echo $user['name']; ?></p>
										<p class="p-link" style="font-size:15px"><b>Ngày sinh : </b><?php echo $user['date_of_birth']; ?></p>
										<p class="p-link" style="font-size:15px"><b>Giới tính : </b><?php echo $user['gender']; ?></p>
										<p class="p-link" style="font-size:15px"><b>Số điện thoại : </b><?php echo $user['phone']; ?></p>
										<p class="p-link" style="font-size:15px"><b>Địa chỉ : </b><?php echo $user['address']; ?></p>
										<a class="btn btn-primary" href="update_user.php?id=<?php echo $user['user_id']; ?>">Sửa</a>
									</div>
								</div>
							</div>
						</div>
					<?php
					} else {
					?>
						<h3 style="color:#444; font-size:23px;" class="text-center">Bạn chưa điền thông tin !!</h3>
						<button class="text-center">Xin hãy điền tại đây</button>
					<?php
					}
					?>
				</div>

				<h3 style="color:black;" class="text-center">Lịch sử đặt vé</h3>
				<?php include('msgbox.php'); ?>
				<?php
				$bk = mysqli_query($con, "select * from tbl_bookings where user_id='" . $_SESSION['user'] . "'");
				if (mysqli_num_rows($bk)) {
				?>
					<table class="table table-bordered">
						<thead>
							<th>Vé</th>
							<th>Phim</th>
							<th>Ngày chiếu:</th>
							<th>Ngày đặt vé</th>
							<th>Tên rạp</th>
							<th>thời gian</th>
							<th>Ghế</th>
							<th>Thành tiền</th>
							<th></th>
						</thead>
						<tbody>
							<?php
							while ($bkg = mysqli_fetch_array($bk)) {
								$m = mysqli_query($con, "select * from tbl_movie where movie_id=(select movie_id from tbl_shows where s_id='" . $bkg['show_id'] . "')");
								$mov = mysqli_fetch_array($m);
								$tt = mysqli_query($con, "select * from tbl_theatre where id='" . $bkg['t_id'] . "'");
								$thr = mysqli_fetch_array($tt);
								$st = mysqli_query($con, "select * from tbl_show_time where st_id=(select st_id from tbl_shows where s_id='" . $bkg['show_id'] . "')");
								$stm = mysqli_fetch_array($st);
							?>
								<tr>
									<td>
										<?php echo $bkg['ticket_id']; ?>
									</td>
									<td>
										<?php echo $mov['movie_name']; ?>
									</td>
									<td>
										<?php echo $mov['release_date']; ?>
									</td>
									<td>
										<?php echo $bkg['ticket_date']; ?>
									</td>
									<td>
										<?php echo $thr['name']; ?>
									</td>
									<td>
										<?php echo $stm['start_time']; ?>
									</td>
									<td>
										<?php echo $bkg['no_seats']; ?>
									</td>
									<td>
										<?php echo $bkg['amount']; ?> VND
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				<?php
				} else {
				?>
					<h3 style="color:red;" class="text-center">Không có vé nào được tìm thấy!</h3>
				<?php
				}
				?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>