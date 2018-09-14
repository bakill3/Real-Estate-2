<?php 
include 'header_main.php'; 
if (isset($_SESSION['login'])) {

	echo "<script>window.location.href='painel.php'</script>";
}
?>

		<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Login</div>
		</div>
	</div>
	<?php
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($link, $_POST['username']);
		$password = mysqli_real_escape_string($link, $_POST['password']);
		$busca = mysqli_query($link, "SELECT * FROM users WHERE username='$username'");
		if (mysqli_num_rows($busca) == 1) {
			$info_user = mysqli_fetch_assoc($busca);
			$password_db = $info_user['password'];

			$pass_hash = password_hash($password, PASSWORD_DEFAULT);

			if (password_verify($password, $password_db)) {
				$_SESSION['login'] = $username;
				echo "<script>window.location.href='painel.php'</script>";
			}
		} else {
			$erro = "Utilizador/Password Incorretos";
		}
	}
	?>
	<div class="intro">
		<div class="container">
			<?php 
			if (isset($erro)) { 
				echo $erro; 
			} 
			?>

			<h2 style="text-align: center;">Iniciar Sessão</h2>
			<form method="POST">
				<input type="text" name="username" class="form-control" placeholder="Utilizador"><br>
				<input type="password" name="password" class="form-control" placeholder="Password"><br>
				<input type="submit" name="login" class="btn btn-warning">
			</form>
		</div>
	</div>
<?php include 'footer_main.php'; ?>
