<?php 
include 'header_main.php'; 
include 'verifica_admin.php';
?>
		<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Editar Imóveis</div>
		</div>
	</div>

	<div class="intro">
		<div class="container">
			<a href="painel.php" class="btn btn-info">Voltar ao Painel</a><br><br>
			<table class="table table-bordered table-dark">
				<thead>
					<tr>
						<td>Título</td>
						<td>Descrição</td>
						<td>Foto de Destaque</td>
						<td>Ação 1</td>
						<td>Ação 2</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$busca_aps = mysqli_query($link, "SELECT * FROM apartamento");
					if (mysqli_num_rows($busca_aps) > 0) {
						while ($info_aps = mysqli_fetch_array($busca_aps)) {
							$id = $info_aps['id'];
							$titulo = $info_aps['titulo'];
							$descricao = $info_aps['descricao'];
							$foto_destaque = $info_aps['foto_destaque'];
					?>
					<tr>
						<td><?php echo $titulo; ?></td>
						<td><?php echo $descricao; ?></td>
						<td><img src="<?php echo $foto_destaque; ?>" style="width: 250px; height: 200px;"></td>
						<td><a href="edita.php?id=<?php echo $id; ?>" class="btn btn-warning">Editar</td>
						<td><a href="apaga.php?id=<?php echo $id; ?>" class="btn btn-danger">Eliminar</td>
					</tr>
					<?php
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
<?php include 'footer_main.php'; ?>
