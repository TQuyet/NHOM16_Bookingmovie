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
			<li class="nav-item">
				<?php if (isset($_SESSION['user'])) {
					$us = mysqli_query($con, "select * from tbl_registration where user_id='" . $_SESSION['user'] . "'");
					$user = mysqli_fetch_array($us); ?><a href="profile.php"><?php echo $user['name']; ?></a><a href="logout.php">Logout</a><?php } else { ?><a href="login.php">Login</a> <a href="registration.php">Register</a><?php } ?>

			</li>
		</div>
	</div>
</nav>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active" data-bs-interval="10000">
			<img src="https://files.betacorp.vn/files/ecm/2022/01/26/phim-hay-thang-2-02-095008-260122-57.jpg" class="img" alt="...">
			<div class="carousel-caption d-none d-md-block">


			</div>
		</div>
		<div class="carousel-item" data-bs-interval="2000">
			<img src="https://files.betacorp.vn/files/ecm/2022/02/25/9c5193dbae4962173b58-143154-250222-60.jpg" class="img" alt alt="...">
			<div class="carousel-caption d-none d-md-block">

			</div>
		</div>
		<div class="carousel-item">
			<img src="https://files.betacorp.vn/files/ecm/2022/03/01/phim-hay-thang-3-2022-1702x621-113232-010322-46.png" class="img" alt="...">
			<div class="carousel-caption d-none d-md-block">

			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid">

	<footer class="text-dark text-center text-lg-start bg-white">
		<!-- Grid container -->
		<div class="container p-4">
			<!--Grid row-->
			<div class="row mt-4">
				<!--Grid column-->
				<div class="col-lg-4 col-md-12 mb-4 mb-md-0">
					<h5 class="text-uppercase mb-4">About company</h5>

					<p>
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
						voluptatum deleniti atque corrupti.
					</p>

					<p>
						Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
						molestias.
					</p>

					<div class="mt-4">
						<!-- Facebook -->
						<a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
						<!-- Dribbble -->
						<a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i></a>
						<!-- Twitter -->
						<a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
						<!-- Google + -->
						<a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
						<!-- Linkedin -->
					</div>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
					<h5 class="text-uppercase mb-4 pb-1">Search something</h5>

					<div class="form-outline form-white mb-4">
						<input type="text" id="formControlLg" class="form-control form-control-lg" />
						<label class="form-label" for="formControlLg">Search</label>
					</div>

					<ul class="fa-ul" style="margin-left: 1.65em;">
						<li class="mb-3">
							<span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Warsaw, 00-967, Poland</span>
						</li>
						<li class="mb-3">
							<span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">contact@example.com</span>
						</li>
						<li class="mb-3">
							<span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 48 234 567 88</span>
						</li>
					</ul>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
					<h5 class="text-uppercase mb-4">Opening hours</h5>

					<table class="table text-center text-dark">
						<tbody class="fw-normal">
							<tr>
								<td>Mon - Thu:</td>
								<td>8am - 9pm</td>
							</tr>
							<tr>
								<td>Fri - Sat:</td>
								<td>8am - 1am</td>
							</tr>
							<tr>
								<td>Sunday:</td>
								<td>9am - 10pm</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--Grid column-->
			</div>
			<!--Grid row-->
		</div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2020 Copyright:
			<a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
		</div>
		<!-- Copyright -->
	</footer>

</div>
<!-- End of .container -->

</html>