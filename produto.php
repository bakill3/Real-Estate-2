<?php 
include 'ligar_db.php'; 
if (isset($_GET['id'])) {
	$id_imovel = mysqli_real_escape_string($link, $_GET['id']);
	$busca_ap = mysqli_query($link, "SELECT * FROM apartamento WHERE id='$id_imovel'");
	if (mysqli_num_rows($busca_ap) > 0) {
		while ($info_imovel = mysqli_fetch_array($busca_ap)) {
			$titulo = $info_imovel['titulo'];
			$descricao = $info_imovel['descricao'];
			$foto_destaque = $info_imovel['foto_destaque'];
		}
	} else {
		echo "<script>window.location.href='index.php'</script>";
	}
} else {
	echo "<script>window.location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $titulo; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<?php include 'barra.php'; ?>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><?php /* <img src="images/logo.png" alt=""> */ ?>Sun Apartments</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">início</a></li>
								<li class="main_nav_item"><a href="reservas.php">reservas</a></li>
								<li class="main_nav_item"><a href="galeria.php">Galeria</a></li>
								<li class="main_nav_item"><a href="sobre.php">Contactos</a></li>
								<?php /* <li class="main_nav_item"><a href="blog.html">Por Temporada</a></li> */ ?>
							</ul>
						</div>
						

						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.html">home</a></li>
				<li class="menu_item"><a href="sobre.php">about us</a></li>
				<li class="menu_item"><a href="reservas.php">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/single_background.jpg"></div>
		<div class="home_content">
			<div class="home_title"><?php echo $titulo; ?></div>
		</div>
	</div>

	<!-- Offers -->

	<div class="listing">

		<!-- Search -->

		
		</div>

		<!-- Single Listing -->

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content">
									<h1 class="hotel_title"><?php echo $titulo; ?></h1>
									<?php /*
									<div class="rating_r rating_r_4 hotel_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>

									<div class="hotel_location">345 677 Gran Via Street, no 34, Madrid, Spain</div>
									*/ ?>
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<div class="button book_button trans_200"><a href="https://www.avaibook.com/reservas/listado.php?cod_propietario=71675&lang=pt">Reservar<span></span><span></span><span></span></a></div>
									<?php /*
									<div class="hotel_map_link_container">
										<div class="hotel_map_link">See Location on Map</div>
									</div>
									*/ ?>
								</div>
							</div>

							<!-- Listing Image -->

							<div class="hotel_image">
								<img src="<?php echo $foto_destaque; ?>" alt="">
								<?php /* 
								<div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
									
									<div class="hotel_review">
										<div class="hotel_review_content">
											<div class="hotel_review_title">very good</div>
											<div class="hotel_review_subtitle">100 reviews</div>
										</div>
										<div class="hotel_review_rating text-center">8.1</div>
									</div>
									
								</div>
								*/ ?>
							</div>

							<!-- Hotel Gallery -->

							<div class="hotel_gallery">
								<div class="hotel_slider_container">
									<div class="owl-carousel owl-theme hotel_slider">
										<?php
										$busca_fotos = mysqli_query($link, "SELECT * FROM galeria WHERE id_produto='$id_imovel'");
										if (mysqli_num_rows($busca_fotos) > 0) {
											while($info_fotos = mysqli_fetch_array($busca_fotos)) {
												$imagem = $info_fotos['imagem'];
										?>
										<div class="owl-item">
											<a class="colorbox cboxElement" href="<?php echo $imagem; ?>">
												<img src="<?php echo $imagem; ?>" alt="<?php echo $titulo; ?>">
											</a>
										</div>
										<?php
											}
										}
										/*
										?>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_1.jpg">
												<img src="images/listing_thumb_1.jpg" alt="https://unsplash.com/@jbriscoe">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_2.jpg">
												<img src="images/listing_thumb_2.jpg" alt="https://unsplash.com/@grovemade">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_3.jpg">
												<img src="images/listing_thumb_3.jpg" alt="https://unsplash.com/@fransaraco">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_4.jpg">
												<img src="images/listing_thumb_4.jpg" alt="https://unsplash.com/@workweek">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_5.jpg">
												<img src="images/listing_thumb_5.jpg" alt="https://unsplash.com/@workweek">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_6.jpg">
												<img src="images/listing_thumb_6.jpg" alt="https://unsplash.com/@avidenov">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_7.jpg">
												<img src="images/listing_thumb_7.jpg" alt="https://unsplash.com/@pietruszka">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_8.jpg">
												<img src="images/listing_thumb_8.jpg" alt="https://unsplash.com/@rktkn">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_9.jpg">
												<img src="images/listing_thumb_9.jpg" alt="https://unsplash.com/@mindaugas">
											</a>
										</div>
										<?php
										*/
										?>
									</div>

									<!-- Hotel Slider Nav - Prev -->
									<div class="hotel_slider_nav hotel_slider_prev">
										<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_prev'>
													<stop offset='0%' stop-color='#fa9e1b'/>
													<stop offset='100%' stop-color='#8d4fff'/>
												</linearGradient>
											</defs>
											<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
											M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
											C22.545,2,26,5.541,26,9.909V23.091z"/>
											<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
											11.042,18.219 "/>
										</svg>
									</div>
									
									<!-- Hotel Slider Nav - Next -->
									<div class="hotel_slider_nav hotel_slider_next">
										<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_next'>
													<stop offset='0%' stop-color='#fa9e1b'/>
													<stop offset='100%' stop-color='#8d4fff'/>
												</linearGradient>
											</defs>
										<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"/>
										<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
										17.046,15.554 "/>
										</svg>
									</div>

								</div>
							</div>

							<!-- Hotel Info Text -->

							<div class="hotel_info_text">
								<p><?php echo $descricao; ?></p>
							</div>

							<!-- Hotel Info Tags -->
							<?php /*
							<div class="hotel_info_tags">
								<ul class="hotel_icons_list">
									<li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
								</ul>
							</div>
							*/ ?>

						</div>
						
						<!-- Rooms -->

						<div class="rooms">

							<!-- Room -->
							

								<!-- Room -->
									<?php
									$busca_outros = mysqli_query($link, "SELECT * FROM apartamento ORDER BY RAND() LIMIT 2");
									while ($info_outros = mysqli_fetch_array($busca_outros)) {
										$id_outro = $info_outros['id'];
										$imagem_outro = $info_outros['foto_destaque'];
										$titulo_outro = $info_outros['titulo'];
										$descricao_outro = $info_outros['descricao'];
									?>
									<div class="room">
									<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="<?php echo $imagem_outro; ?>" alt="<?php echo $titulo_outro; ?>"></div>
									</div>

									
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title"><?php echo $titulo_outro; ?>u</div>
											<?php /* <div class="room_price">$99/night</div> */ ?>
											<div class="room_text"><?php echo $descricao_outro; ?></div>
											<?php /* <div class="room_extra">Breakfast $7.50</div> */ ?>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="produto.php?id=<?php echo $id_outro; ?>">Reservar<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>	
							</div>
							<?php
							} /*
							?>

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="images/room_2.jpg" alt="https://unsplash.com/@oowgnuj"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title">Double or Twin Room</div>
											<div class="room_price">$99/night</div>
											<div class="room_text">FREE cancellation before 23:59 on 20 December 2017</div>
											<div class="room_extra">Breakfast $7.50</div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>	
							</div>
							<?php
							*/
							?>

						</div>

						<!-- Reviews -->
						<?php
						/*
						?>
						<div class="reviews">
							<div class="reviews_title">reviews</div>
							<div class="reviews_container">

								<!-- Review -->
								<div class="review">
									<div class="row">
										<div class="col-lg-1">
											<div class="review_image">
												<img src="images/review_1.jpg" alt="https://unsplash.com/@saaout">
											</div>
										</div>
										<div class="col-lg-11">
											<div class="review_content">
												<div class="review_title_container">
													<div class="review_title">"We loved the services"</div>
													<div class="review_rating">9.5</div>
												</div>
												<div class="review_text">
													<p>Tetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum.</p>
												</div>
												<div class="review_name">Christinne Smith</div>
												<div class="review_date">12 November 2017</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Review -->
								<div class="review">
									<div class="row">
										<div class="col-lg-1">
											<div class="review_image">
												<img src="images/review_2.jpg" alt="Image by Andrew Robles">
											</div>
										</div>
										<div class="col-lg-11">
											<div class="review_content">
												<div class="review_title_container">
													<div class="review_title">"Nice staff and great location"</div>
													<div class="review_rating">9.5</div>
												</div>
												<div class="review_text">
													<p>Tetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum.</p>
												</div>
												<div class="review_name">Christinne Smith</div>
												<div class="review_date">12 November 2017</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						

						<!-- Location on Map -->

						<div class="location_on_map">
							<div class="location_on_map_title">location on map</div>

							<!-- Google Map -->
		
							<div class="travelix_map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>

						</div>
						<?php
						*/
						?>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->

<?php include 'footer.php'; ?>

