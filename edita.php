<?php 
include 'header_main.php'; 
include 'verifica_admin.php';
if (isset($_GET['id'])) {
	$id = mysqli_real_escape_string($link, $_GET['id']);
	$dados = mysqli_query($link, "SELECT * FROM apartamento WHERE id='$id' LIMIT 1");
	$info = mysqli_fetch_assoc($dados);

	$titulo = $info['titulo'];
	$descricao = $info['descricao'];
	$foto_destaque = $info['foto_destaque'];

	if (isset($_POST['atualizar_ap'])) {
		$titulo_atualizado = mysqli_real_escape_string($link, $_POST['titulo_atualizado']);
		$descricao_atualizado = mysqli_real_escape_string($link, $_POST['descricao_atualizado']);



		 if (!empty($_FILES['file']['name'])) {
		 	$file_name = $_FILES['file']['name'];
			  $file_type = $_FILES['file']['type'];
			  $file_size = $_FILES['file']['size'];
			  $file_tem_loc = $_FILES['file']['tmp_name'];
			  $file_store = "aps/".$file_name;
		 	move_uploaded_file($file_tem_loc, $file_store);
		 	mysqli_query($link, "UPDATE apartamento SET titulo='$titulo_atualizado', descricao='$descricao_atualizado', foto_destaque='$file_store' WHERE id='$id'");
		 } else {
		 	mysqli_query($link, "UPDATE apartamento SET titulo='$titulo_atualizado', descricao='$descricao_atualizado' WHERE id='$id'");

		 }

		 echo "<script>window.location.href='edita.php?id=$id'</script>";

	}

?>
		<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title"><?php echo $titulo; ?></div>
		</div>
	</div>

	<div class="intro">
		<div class="container">
			<form method="POST">
				<input type="text" name="titulo_atualizado" placeholder="Título" value="<?php echo $titulo; ?>" class="form-control"><br>
				<textarea class="form-control" name="descricao_atualizado"><?php echo $descricao; ?></textarea><br>
				<img src="<?php echo $foto_destaque; ?>" style="width: 250px; height: 200px;"><br><br>
				<input type="file" name="file"><br><br>
				<input type="submit" name="atualizar_ap" class="btn btn-success">
			</form>
					<br>
					<a href="editar_imoveis.php" class="btn btn-warning">Editar Imóveis</a><br>
					<br><a href="painel.php" class="btn btn-danger">Voltar ao Painel</a>
		</div>
	</div>
<?php 
}
include 'footer_main.php'; 
?>
