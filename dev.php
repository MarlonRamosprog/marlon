<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_webmaster.css">
	<title></title>
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
		echo "<h1>Bem-vindo, Márlon Ramos.</h1>";
	?>
	<div class="menu">
		<p>O que você gostaria de fazer?</p>
		<ul>
			<li><a href="cadastro_blog.php">Cadastrar nova postagem para o blog</a></li>				
			<li><a href="pedidos.php">Verificar pedidos de orçamento</a></li>
			<li><a href="cadastro_portfolio.php">Cadastrar nova postagem para o blog</a></li>
		</ul>
	</div>	

	<script type="text/javascript" src="main_webmaster.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script> 
</body>
</html>