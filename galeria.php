<?php include 'header_main.php'; ?>
		<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">galeria</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<?php
			$busca_fotos = mysqli_query($link, "SELECT * FROM galeria");
			if (mysqli_num_rows($busca_fotos) > 0) {
				while($loop_fotos = mysqli_fetch_array($busca_fotos)) {
					$id_foto = $loop_fotos['id'];
					$id_produto = $loop_fotos['id_produto'];
					$imagem = $loop_fotos['imagem'];

			?>
			<a href="https://www.avaibook.com/reservas/listado.php?cod_propietario=71675&lang=pt"><img src="<?php echo $imagem; ?>" style="height: 200px; width: 250px; padding: 5px;" style="display: inline-block;"></a>
			<?php
				}
			}
			?>
		</div>
	</div>
<?php include 'footer_main.php'; ?>