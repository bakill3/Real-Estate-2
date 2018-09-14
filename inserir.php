<?php 
include 'header_main.php';
include 'verifica_admin.php';
?>
		<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">inserir imóvel</div>
		</div>
	</div>

	<!-- Intro -->
<?php
if (isset($_POST['inserir_imovel'])) {
    //TABELA PROPRIEDADES 
    if (isset($_SESSION['login'])) {
      $sessao = $_SESSION['login'];
      $sql_user = "SELECT * FROM utilizadores WHERE email='$sessao'";
      $ligar_user = mysqli_query($link, $sql_user);
      $buscarr_user = mysqli_fetch_assoc($ligar_user);
      $user_id = $buscarr_user['id_user'];
    }

    $titulo = htmlspecialchars(mysqli_real_escape_string($link, $_POST['titulo']));
    $descricao = htmlspecialchars(mysqli_real_escape_string($link, $_POST['descricao']));

    //-----------------------------------------------
    if (!empty($titulo) && !empty($descricao)) {

    	  
		          $file_name = $_FILES['file']['name'];
		  $file_type = $_FILES['file']['type'];
		  $file_size = $_FILES['file']['size'];
		  $file_tem_loc = $_FILES['file']['tmp_name'];
		  $file_store = "aps/".$file_name;

		  move_uploaded_file($file_tem_loc, $file_store);
        $query = "INSERT INTO apartamento (titulo, descricao, foto_destaque) VALUES ('$titulo', '$descricao', '$file_store')";
        mysqli_query($link, $query) or die(mysqli_error($link));

         //----------------------
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
			    $temp = $_FILES["files"]["tmp_name"][$key];
			    $name = $_FILES["files"]["name"][$key];
			     
			    if(empty($temp)) {
			        break;
			    }
			     
			    move_uploaded_file($temp,"aps/".$name);
			    $link_foto = "aps/".$name;
			    $sql_galeria = "INSERT INTO galeria (id_produto, imagem) VALUES ((SELECT id FROM apartamento WHERE titulo='$titulo' AND descricao='$descricao' LIMIT 1), '$link_foto');";
			    mysqli_query($link, $sql_galeria) or die(mysqli_error($link));
		}

        
        echo "<script>window.location.href='reservas.php'</script>";

    } else {
      echo "BLYAT";
    }
}
?>
	<div class="intro">
		<div class="container">
			<form action="" method="POST" enctype="multipart/form-data">
		    Título <input type="text" class="form-control" name="titulo" placeholder="Título" required><br>
		   	Descrição <textarea class="form-control" name="descricao" placeholder="Descrição" required></textarea><br>
		    
		    <br>
		    <label>Foto de Destaque</label>
		    <input type="file" name="file" required /><br><br>
		    <label>Fotos</label>
		    <input type="file" name="files[]" multiple="multiple" required />

		    <br><br><input type="submit" name="inserir_imovel" class="btn btn-primary" value="Submeter">
		</form>
		<br><br><a href="painel.php" class="btn btn-danger">Voltar ao Painel</a>
		</div>
	</div>
<?php include 'footer_main.php'; ?>