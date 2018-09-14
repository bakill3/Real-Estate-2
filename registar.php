<?php 
include 'header_main.php'; 
include 'verifica_admin.php';
?>
<?php
if (isset($_POST['registar'])) {
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$nome = mysqli_real_escape_string($link, $_POST['nome']);
	$pass1 = mysqli_real_escape_string($link, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($link, $_POST['pass2']);

	$busca_db = mysqli_query($link, "SELECT * FROM users");
	$muda = 0;
	while ($info_users = mysqli_fetch_array($busca_db)) {
		$username_db = $info_users['username'];
		if ($username_db == $username) {
			$muda = 1;
		}
	}


	if ($muda == 0) {
		if ($pass1 == $pass2) {
			$pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
			mysqli_query($link, "INSERT INTO users(nome, username, password) VALUES('$nome', '$username', '$pass_hash')");
			$erro = "Utilizador registado com sucesso";
		} else {
			$erro = "As passwords não são iguais";
		}
	} else {
		$erro = "Esse username já existe na base de dados"; 
	}
}



?>
		<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Registar</div>
		</div>
	</div>

	<div class="intro">
		<div class="container">
			<?php
			if (isset($erro)) {
				echo $erro;
			}
			?>
			<form method="POST">
				<input type="text" name="username" placeholder="Utilizador" class="form-control"><br>
				<input type="text" name="nome" placeholder="Nome" class="form-control"><br>
				<input type="password" name="pass1" placeholder="Password" class="form-control"><br>
				<input type="password" name="pass2" placeholder="Repetir password" class="form-control"><br>
				<input type="submit" name="registar" value="Registar" class="btn btn-success">
			</form>
					<br><br><a href="painel.php" class="btn btn-danger">Voltar ao Painel</a>
		</div>
	</div>
<?php include 'footer_main.php'; ?>
