<?php 
include 'header_main.php'; 
include 'verifica_admin.php';
?>
<?php
if (isset($_GET['id'])) {
	$id = mysqli_real_escape_string($link, $_GET['id']);
	mysqli_query($link, "DELETE FROM galeria WHERE id_produto=(SELECT id FROM apartamento WHERE id='$id')") or die(mysqli_error($link));
	mysqli_query($link, "DELETE FROM apartamento WHERE id='$id'") or die(mysqli_error($link));
	echo "<script>window.location.href='painel.php'</script>";
}
?>
		<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Administração</div>
		</div>
	</div>

	<div class="intro">
		<div class="container">
			
		</div>
	</div>
<?php include 'footer_main.php'; ?>
