<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Antropometrikit</title>
	<link rel="shortcut icon" href="<?= base_url('assets') ?>/img/sobad-logo-circle.png">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/css/sobad-style.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/plugin/owl-carousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="main">
		<div class="container-fluid p-0">
			<div class="col-12 p-0 mh-100">
				<div class="content col-md-6 ml-auto mr-auto  p-0">
					<div class="pt-4 card-pc">
						<div class="card bg-gradient-grey border-0 rounded-xl box-shadow-sm">
							<div class="row m-0 align-items-end">
								<div class="col-md-6 pr-3 pt-3 pl-5 pb-3">
									<h1 class="regular">Paket</h1>
									<h2 class="bold blue">Antropometri</h2>
									<div class="mt-3">
										<p class="regular dark-grey">Untuk tutorial cara penggunaan,
											pemasangan & pelepasan produk kami
											Silahkan pilih tutorial di bawah ini ya </p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="pl-3 pr-3 pt-3 mb-0">
										<img class="w-90" src="<?= base_url('assets') ?>/img/model-board.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ==========Content Mobile============ -->
					<div class="card-mobile pt-2">
						<div class="col">
							<div class="p-lg">
								<h1 class="regular">Paket</h1>
								<h2 class="bold blue">Antropometri</h2>
								<div class="pt-1  sub-title">
									<p class="regular dark-grey">Untuk tutorial cara penggunaan,
										pemasangan & pelepasan produk kami
										Silahkan pilih tutorial di bawah ini ya </p>
								</div>
							</div>
							<div class="card bg-gradient-grey border-0 rounded-xl">
								<div class="pl-3 pr-3 pt-3 mb-0">
									<img class="w-80" src="<?= base_url('assets') ?>/img/model-board.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="owl-nav"></div>
					<div class="pt-2  mr-auto">

						<div class="carousel owl-carousel">
							<!-- =============Stadiometer================= -->
							<div class="m-3">
								<div class="card rounded-md bg-gradient-primary-grey border-0 box-shadow-sm h-100">
									<div class="card-header p-0 rounded-md h-100">
										<img class="image-slide" src="<?= base_url('assets') ?>/img/stadiometer.png" alt="">
									</div>
								</div>
								<div class="btn-group w-100 mt-2">
									<button type="button" class="btn bg-light rounded-md dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
										<div class="row">
											<div class="col-6 text-left">
												<p class="m-0 p-0">Portable</p>
												<h5 class="blue m-0 p-0 bold">Stadiometer</h5>
											</div>
											<div class="col-6 icon">
												<div class="bg-blue rounded-circle content-icon ml-auto"><i onclick="clicked(this)" class="fa fa-arrow-down" aria-hidden="true"></div></i>
											</div>
										</div>
									</button>
									<div class="dropdown-menu sobad-dropdown" style="">
										<a class="dropdown-item sobad-drodown-item" href="https://www.youtube.com/watch?v=JKcsRQCdgEQ&list=PLuX5spsJ1i8JWKK7cMnqQaDGwmqjzhC67&index=2" target="_blank">
											<h5>Cara Pemasangan</h5>
										</a>
										<a class="dropdown-item sobad-drodown-item" href="https://www.youtube.com/watch?v=pmMgv4iwEgg" target="_blank">
											<h5>Cara Penggunaan</h5>
										</a>
									</div>
								</div>
							</div>
							<!-- =============Infantometer Board================= -->
							<div class="m-3">
								<div class="card rounded-md bg-gradient-primary-grey border-0 box-shadow-sm h-100">
									<div class="card-header p-0 rounded-md h-100">
										<img class="image-slide" src="<?= base_url('assets') ?>/img/board.png" alt="">
									</div>
								</div>
								<div class="btn-group w-100 mt-2">
									<button type="button" class="btn bg-light rounded-md dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
										<div class="row">
											<div class="col-6 text-left">
												<p class="m-0 p-0">Infantometer</p>
												<h5 class="blue m-0 p-0 bold">Board.</h5>
											</div>
											<div class="col-6 icon">
												<div class="bg-blue rounded-circle content-icon ml-auto"><i onclick="clicked(this)" class="fa fa-arrow-down" aria-hidden="true"></div></i>
											</div>
										</div>
									</button>
									<div class="dropdown-menu sobad-dropdown" style="">
										<a class="dropdown-item sobad-drodown-item" href="https://www.youtube.com/watch?v=0LfhVddNcjo" target="_blank">
											<h5>Cara Pemasangan</h5>
										</a>
										<!-- <a class="dropdown-item sobad-drodown-item" href="#">
                                            <h5>Cara Penggunaan</h5>
                                        </a> -->
									</div>
								</div>
							</div>
							<!-- =============Infantometer Port================= -->
							<div class="m-3">
								<div class="card rounded-md bg-gradient-primary-grey border-0 box-shadow-sm h-100">
									<div class="card-header p-0 rounded-md h-100">
										<img class="image-slide" src="<?= base_url('assets') ?>/img/infantometer-port.png" alt="">
									</div>
								</div>
								<div class="btn-group w-100 mt-2">
									<button type="button" class="btn bg-light rounded-md dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
										<div class="row">
											<div class="col-6 text-left">
												<p class="m-0 p-0">Infantometer</p>
												<h5 class="blue m-0 p-0 bold">Portable.</h5>
											</div>
											<div class="col-6 icon">
												<div class="bg-blue rounded-circle content-icon ml-auto"><i onclick="clicked(this)" class="fa fa-arrow-down" aria-hidden="true"></div></i>
											</div>
										</div>
									</button>
									<div class="dropdown-menu sobad-dropdown">
										<a class="dropdown-item sobad-drodown-item" href="https://youtube.com/watch?v=A1dwcrGoW0g" target="_blank">
											<h5>Cara Penggunaan</h5>
										</a>
									</div>
								</div>
							</div>
							<!-- =============Baby Scale================= -->
							<div class="m-3">
								<div class="card rounded-md bg-gradient-primary-grey border-0 box-shadow-sm h-100">
									<div class="card-header p-0 rounded-md h-100">
										<img class="image-slide" src="<?= base_url('assets') ?>/img/baby-try.png" alt="">
									</div>
								</div>
								<div class="btn-group w-100 mt-2">
									<button type="button" class="btn bg-light rounded-md dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
										<div class="row">
											<div class="col-6 text-left">
												<p class="m-0 p-0">Digital</p>
												<h5 class="blue m-0 p-0 bold">Baby Scale.</h5>
											</div>
											<div class="col-6 icon">
												<div class="bg-blue rounded-circle content-icon ml-auto"><i onclick="clicked(this)" class="fa fa-arrow-down" aria-hidden="true"></div></i>
											</div>
										</div>
									</button>
									<div class="dropdown-menu sobad-dropdown" style="">
										<a class="dropdown-item sobad-drodown-item" href="https://www.youtube.com/watch?v=avM4DC4oWUg&list=PLuX5spsJ1i8JWKK7cMnqQaDGwmqjzhC67&index=3" target="_blank">
											<h5>Cara Pemasangan</h5>
										</a>
									</div>
								</div>
							</div>
							<!-- =============Weight Scale================= -->
							<div class="m-3">
								<div class="card rounded-md bg-gradient-primary-grey border-0 box-shadow-sm h-100">
									<div class="card-header p-0 rounded-md h-100">
										<img class="image-slide" src="<?= base_url('assets') ?>/img/h-timbangan dewasa.png" alt="">
									</div>
								</div>
								<div class="btn-group w-100 mt-2">
									<button type="button" class="btn bg-light rounded-md dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
										<div class="row">
											<div class="col-6 text-left">
												<p class="m-0 p-0">Digital</p>
												<h5 class="blue m-0 p-0 bold">Weight Scale.</h5>
											</div>
											<div class="col-6 icon">
												<div class="bg-blue rounded-circle content-icon ml-auto"><i onclick="clicked(this)" class="fa fa-arrow-down" aria-hidden="true"></div></i>
											</div>
										</div>
									</button>
									<div class="dropdown-menu sobad-dropdown" style="">
										<!-- <a class="dropdown-item sobad-drodown-item" href="#">
                                            <h5>Cara Penggunaan</h5>
                                        </a> -->
									</div>
								</div>
							</div>
							<!-- =============LILA================= -->
							<div class="m-3">
								<div class="card rounded-md bg-gradient-primary-grey border-0 box-shadow-sm h-100">
									<div class="card-header p-0 rounded-md h-100">
										<img class="image-slide" src="<?= base_url('assets') ?>/img/lila.png" alt="">
									</div>
								</div>
								<div class="btn-group w-100 mt-2">
									<button type="button" class="btn bg-light rounded-md dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
										<div class="row">
											<div class="col-6 text-left">
												<p class="m-0 p-0">Body </p>
												<h5 class="blue m-0 p-0 bold">Measuring Tape</h5>
											</div>
											<div class="col-6 icon">
												<div class="bg-blue rounded-circle content-icon ml-auto"><i onclick="clicked(this)" class="fa fa-arrow-down" aria-hidden="true"></div></i>
											</div>
										</div>
									</button>
									<div class="dropdown-menu sobad-dropdown" style="">
										<a class="dropdown-item sobad-drodown-item" href="https://www.youtube.com/watch?v=qn4kzDO1_-o" target="_blank">
											<h5>Cara Penggunaan</h5>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="mr-auto ml-auto manufac">
			<div class="text-center pl-lg-5 pr-lg-5">
				<p class="m-0">Manufactured by <br>
					PT Solo Abadi Indonesia <br>
					www.soloabadi.com</p>
			</div>
		</div>
	</div>
	<script src="<?= base_url('assets') ?>/vendor/jquery/jquery-3.min.js"></script>
	<script src="<?= base_url('assets') ?>/bootstrap-4/js/pooper.min.js"></script>
	<script src="<?= base_url('assets') ?>/bootstrap-4/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets') ?>/plugin/owl-carousel/js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets') ?>/js/carousel.js"></script>
	<script src="<?= base_url('assets') ?>/js/animate.js"></script>
</body>

</html>