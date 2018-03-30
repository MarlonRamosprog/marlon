<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style_blog.css">
	<title>Márlon Ramos - Blog</title>
</head>
<body>
	<!--coluna da esquerda, apresentação-->
	<div class="coluna_esquerda">
		<!--Foto-->
		<div class="contorno_foto">
			<a href="index.html"><img src="img/m.jpg" class="foto" id="01"></a>
		</div>

		<!--Título e Subtítulo-->
		<div class="texto"><a href="index.html"><h1 class="titulo" id="02">Márlon Ramos</h1></a></div>
		<div class="texto"><a href="index.html"><h2 class="subtitulo" id="03">Desenvolvedor Web</h2></a></div>
		<div class="texto"><p class="paragrafo" id="04">Entusiasta de programação e freelancer. Desenhista e guitarrista nas horas vagas.</p></div>

		<!--Menu-->
		<div class="menu">
			<div class="botao_menu"><a href="blog.php" id="05">Blog</a></div>
			<div class="botao_menu"><a href="sobre.php" id="06">Sobre</a></div>
			<div class="botao_menu"><a href="contato.php" id="07">Contato</a></div>
			<div class="botao_menu"><a href="Portfolio.php" id="08">Portfolio</a></div> 	
		</div>

		<!--Redes Sociais-->
		<div class="redes_capa">
			<a href="#"><img src="img/face2.jpg" alt="facebook" class="img_rede" id="09"></a>
			<a href="#"><img src="img/git2.jpg" alt="Github"  class="img_rede" id="10"></a>
			<a href="#"><img src="img/link2.jpg" alt="Linkedin" class="img_rede" id="11"></a>
		</div>
	</div>

	<!--coluna da direita, postagens-->
	<div class="conteudo">
		<nav>
			<h3>Blog</h3>
		</nav>
		<div class="postagens">
			<?php 
			$host = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "marlon";

			$conectar = new mysqli($host, $usuario, $senha, $banco);

			if ($conectar->connect_error) {
				die("<p>Não foi possível conectar-se ao servidor!</p>");
			}

			$sql = ("SELECT * FROM blog ORDER BY id DESC");

			$result = $conectar->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "	<div class='post'>
								<h2>" . $row["titulo"] . "</h2>

								<br />

								<p>" . $row ["texto"] . "</p>

								<hr />
							</div>";
				}
			} else {
				echo"<p>Não há postagens disponíveis.</p>";
			}

			$conectar->close();
			?>
		</div>

		<footer>
			<p class="texto_rodape">Desenvolvido por Márlon Ramos</p>
	</footer>
	</div>



</body>
</html>