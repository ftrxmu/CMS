<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
================================================== -->
	<meta charset="utf-8">
	<title><?=$judul?></title>

	<!-- Mobile Specific Metas
================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Construction Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

	<!-- Favicon
================================================== -->
	<link rel="icon" type="image/png" href="<?=base_url('assets/front/')?>images/favicon.png">

	<!-- CSS
================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>plugins/fontawesome/css/all.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>plugins/animate-css/animate.css">
	<!-- slick Carousel -->
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>plugins/slick/slick.css">
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>plugins/slick/slick-theme.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>plugins/colorbox/colorbox.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="<?=base_url('assets/front/')?>css/style.css">

</head>

<body>
	<div class="body-inner">

		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-4 top-social text-center text-md-right">
						<ul class="list-unstyled">
							<li>
								<span class="social-icon"><i class="fa fa-envelope"></i></span>
								<a title="Email" href="https://<?=$konfig->email?>"><?=$konfig->email?></a>
							</li>
							<li>
								<a title="Facebook" href="https://<?=$konfig->facebook?>">
									<span class="social-icon"><i class="fab fa-facebook-f"></i></span>
								</a>
								<a title="Instagram" href="https://<?=$konfig->instagram?>">
									<span class="social-icon"><i class="fab fa-instagram"></i></span>
								</a>
							</li>
						</ul>
					</div>
					<!--/ Top social end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</div>
		<!--/ Topbar end -->
		<!-- Header start -->
		<header id="header" class="header-one">
			<div class="bg-white">
				<div class="container">
					<div class="logo-area">
						<div class="row align-items-center">
							<div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
								<i class='fa fa-ghost mr-2' style="font-size: 34px"></i><a class="text-secondary"
									style="font-size: 34px"
									href="<?=base_url();?>"><b><?= $konfig->judul_website;?></b></a>
							</div><!-- logo end -->
							<div class="col-lg-9 header-right">
								<ul class="top-info-box">
									<li class="header-get-a-quote">
										<?php if ($this->session->userdata('level')=='Admin'){?>
										<a class="btn btn-primary" href="<?=base_url('admin/home');?>">Admin</a>
										<?php } else if ($this->session->userdata('level')=='Kontributor'){?>
										<a class="btn btn-primary" href="<?=base_url('admin/home');?>">Tambah Konten</a>
										<?php } else{ ?>
										<a class="btn btn-primary" href="<?=base_url('auth');?>">Login</a>
										<?php } ?>
									</li>
								</ul><!-- Ul end -->
							</div>
						</div><!-- logo area end -->

					</div><!-- Row end -->
				</div><!-- Container end -->
			</div>

			<div class="site-navigation">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<nav class="navbar navbar-expand-lg navbar-dark p-0">
								<button class="navbar-toggler" type="button" data-toggle="collapse"
									data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
									aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div id="navbar-collapse" class="collapse navbar-collapse">
									<ul class="nav navbar-nav mr-auto">
										<li class="nav-item">
											<a href="<?= base_url()?>" class="nav-link">Home</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Konten
												<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown-menu" role="menu">
												<?php foreach ($kategori as $kateg){?>
													<li>
														<a class="text-secondary" href="<?= base_url('home/kategori/'.$kateg['id_kategori'])?>"class="nav-link"><?= $kateg['nama_kategori']?></a>
													</li>
												<?php }?>
											</ul>
										</li>
										<li class="nav-item">
											<a href="<?= base_url('home/galeri')?>" class="nav-link">Galeri</a>
										</li>
										<li class="nav-item">
											<a href="<?= base_url('home/feedback')?>" class="nav-link">Feedback</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						<!--/ Col end -->
					</div>
					<!--/ Row end -->
				</div>
				<!--/ Container end -->

			</div>
			<!--/ Navigation end -->
		</header>
		<!--/ Header end -->

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php $no=1; foreach ($caraousel as $a){?>
				<div class="carousel-item <?php if($no==1){echo 'active';}?>">
					<img src="<?= base_url('assets/upload/caraousel/'.$a['foto'])?>" class="d-block w-100"
						style="height:50%;">
				</div>
				<?php $no++; } ?>
			</div>
			<button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
				data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
				data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</button>
		</div>

		<section id="news" class="news">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<h2 class="section-title">Welcome👋</h2>
						<h3 class="section-sub-title">Latest Article</h3>
					</div>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<?php foreach ($konten as $bb){?>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="latest-post">
							<div class="latest-post-media">
								<a class="latest-post-img">
									<img loading="lazy" class="img-fluid"
										src="<?= base_url('assets/upload/konten/'.$bb['foto'])?>" style="height:30%;">
								</a>
								<div class="latest-post-meta mt-2">
									<span class="post-item-date">
										<i class="fa fa-clock"></i><?=$bb['tanggal']?>
									</span>
								</div>
							</div>
							<div class="post-body">
								<h4 class="post-title mb-2">
									<a class="d-inline-block"><?=$bb['judul']?></a>
								</h4>
								<div class="d-flex justify-content-left mb-3">
									<small class="mr-3"><i
											class="fa fa-user text-secondary"></i><?=$bb['nama']?></small>
									<small class="mr-3"><i
											class="fa fa-folder text-secondary"></i><?=$bb['nama_kategori']?></small>
								</div>
								<a href="<?= base_url('home/artikel/'.$bb['slug'])?>"
									class="btn btn-secondary ml-20">Baca Selengkapnya</a>
							</div>
						</div><!-- Latest post end -->
					</div>
					<?php } ?>
					<!-- 1st post col end -->
				</div>
				<!--/ Content row end -->
			</div>
		</section>
		<section id="project-area" class="project-area solid-bg">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<h2 class="section-title">Work of Excellence</h2>
						<h3 class="section-sub-title">Gallery</h3>
					</div>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<div class="col-12">
						<div class="row shuffle-wrapper">
							<div class="col-1 shuffle-sizer"></div>
							<?php foreach ($gallery as $g){ ?>
							<div class="col-lg-4 col-md-6 shuffle-item">
								<div class="project-img-container">
									<a class="gallery-popup" href="<?= base_url('assets/upload/gallery/'.$g['foto'])?>"
										aria-label="project-img">
										<img class="img-fluid" src="<?= base_url('assets/upload/gallery/'.$g['foto'])?>"
											alt="project-img">
										<span class="gallery-icon"><i class="fa fa-plus"></i></span>
									</a>
									<div class="project-item-info">
										<div class="project-item-info-content">
											<h3 class="project-item-title">
												<a href="<?= base_url('assets/upload/gallery/'.$g['foto'])?>"
													target="_blank"><?=$g['judul']?></a>
											</h3>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- shuffle item 1 end -->
						</div>
						<div class="col-12">
							<div class="general-btn text-center">
								<a class="btn btn-primary" href="<?=base_url('home/galeri');?>">View All</a>
							</div>
						</div><!-- shuffle end -->
					</div>

				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section>

		<footer id="footer" class="footer bg-overlay">
			<div class="footer-main">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-4 col-md-6 footer-widget footer-about">
							<h3 class="widget-title">About me</h3>
							<div class="footer-logo">
								<i class='fa fa-ghost mr-2' style="font-size: 15px"></i><b class="text-secondary"
									style="font-size: 15px" href="<?=base_url();?>"><?= $konfig->judul_website;?></b>
							</div>
							<p><?=$konfig->profil_website?></p>
							<div class="footer-social">
								<ul>
									<li><a href="https://<?=$konfig->facebook?>" aria-label="Facebook"><i
												class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://<?=$konfig->instagram?>" aria-label="Instagram"><i
												class="fab fa-instagram"></i></a></li>
									<li><a href="https://github.com/themefisher" aria-label="Github"><i
												class="fab fa-github"></i></a>
									</li>
								</ul>
							</div><!-- Footer social end -->
						</div><!-- Col end -->

						<div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
							<h3 class="widget-title">Contact Us</h3>
							<div class="d-flex">
								<h4 class="fa fa-map-marker-alt text-secondary"></h4>
								<div class="pl-3">
									<h5 class="text-white">Alamat</h5>
									<p><?=$konfig->alamat?></p>
								</div>
							</div>
							<div class="d-flex">
								<h4 class="fa fa-envelope text-secondary"></h4>
								<div class="pl-3">
									<h5 class="text-white">Email</h5>
									<p><?=$konfig->email?></p>
								</div>
							</div>
							<div class="d-flex">
								<h4 class="fa fa-phone-alt text-secondary"></h4>
								<div class="pl-3">
									<h5 class="text-white">Phone</h5>
									<p><?=$konfig->no_wa?></p>
								</div>
							</div>
						</div><!-- Col end -->

						<div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
							<h3 class="widget-title">Quick Links</h3>
							<ul class="list-arrow">
								<li><a href="<?=base_url();?>">Home</a></li>
								<?php foreach ($kategori as $kateg){?>
								<li>
									<a
										href="<?= base_url('home/kategori/'.$kateg['id_kategori'])?>"><?= $kateg['nama_kategori']?></a>
								</li>
								<?php }?>
								<li>
									<a href="<?= base_url('home/galeri')?>">Galeri</a>
								</li>
							</ul>
						</div><!-- Col end -->
					</div><!-- Row end -->
				</div><!-- Container end -->
			</div><!-- Footer main end -->

			<div class="copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="copyright-info text-center">
								<span>Copyright &copy; <script>
										document.write(new Date().getFullYear())
									</script>,<?=$konfig->judul_website?>
								</span>
							</div>
						</div>
						<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
							<button class="btn btn-primary" title="Back to Top">
								<i class="fa fa-angle-double-up"></i>
							</button>
						</div>

					</div><!-- Container end -->
				</div><!-- Copyright end -->
		</footer><!-- Footer end -->


		<!-- Javascript Files
  ================================================== -->

		<!-- initialize jQuery Library -->
		<script src="<?=base_url('assets/front/')?>plugins/jQuery/jquery.min.js"></script>
		<!-- Bootstrap jQuery -->
		<script src="<?=base_url('assets/front/')?>plugins/bootstrap/bootstrap.min.js" defer></script>
		<!-- Slick Carousel -->
		<script src="<?=base_url('assets/front/')?>plugins/slick/slick.min.js"></script>
		<script src="<?=base_url('assets/front/')?>plugins/slick/slick-animation.min.js"></script>
		<!-- Color box -->
		<script src="<?=base_url('assets/front/')?>plugins/colorbox/jquery.colorbox.js"></script>
		<!-- shuffle -->
		<script src="<?=base_url('assets/front/')?>plugins/shuffle/shuffle.min.js" defer></script>


		<!-- Google Map API Key-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer>
		</script>
		<!-- Google Map Plugin-->
		<script src="<?=base_url('assets/front/')?>plugins/google-map/map.js" defer></script>

		<!-- Template custom -->
		<script src="<?=base_url('assets/front/')?>js/script.js"></script>

	</div><!-- Body inner end -->
</body>

</html>