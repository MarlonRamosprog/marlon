<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_webmaster.css">
	<title>Cadastro de postagem do blog</title>
</head>
<body>
	<?php
		/*$validar = false;
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		function expulsaVisitante() {
			header("Location: index.html");
		}

		if ($usuario == 'marlon' && $senha == 'shemalelover') {
			$validar = true;
		} else {
			expulsaVisitante();
		}

		if ($validar == false) {
			expulsaVisitante();
		}
		*/
		echo "<h1>Cadastro do Blog</h1>";
	?>
	<div class="menu">
		<p>Registre sua postagem:</p>
		<form form method="post"  enctype="multipart/form-data" action="ok_blog.php">
	  		<label>Título <input type="text" name="titulo" value="" maxlength="50" /></label>

	  		<br />

	  		<label>Selecione uma imagem: <input name="arquivo" type="file"/></label>

	  		<br />

   			<label>Nome da imagem: <input type="text" name="nome_imagem" size: "50"></label>

   			<br />
	  
	  		<label>Texto 
		  		<textarea name="texto" maxlength="50000"/>
		  		</textarea>
		  	</label>
	  
	  		<input type="submit" value="Entrar" />
		</form>
	</div>	

	<script type="text/javascript" src="main_webmaster.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script> 
</body>
</html>