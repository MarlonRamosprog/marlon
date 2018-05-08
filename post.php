<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style_post.css">
	<title>Márlon Ramos - Blog</title>
</head>
<body>	
	<nav>
		<h3>Blog</h3>
	</nav>

	<div class="postagem">
		<?php 
			$id = $_POST["id"];	

			$host = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "marlon";

			$conectar = new mysqli($host, $usuario, $senha, $banco);

			if ($conectar->connect_error) {
				die("<p>Não foi possível conectar-se ao servidor!</p>");
			}

			$sql = ("SELECT * FROM blog WHERE id='$id'");

			$result = $conectar->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "	<h1 class='titulo'>" . $row['titulo'] . "</h1>
							<br />
							<div class='container_foto'>
								<div class='contorno_foto'>
									<img src='img/" . $row['imagem'] . ".jpg' class='foto_blog'>
								</div>
							</div>
							<p class='texto'>" . $row['texto'] . "</p>
								
							</div>";
				}
			} else {
				echo"<p>Não é possível visualizar a postagem.</p>";
			}

			$conectar->close();
			?>
		
		<footer>
			<p class="texto_rodape">Desenvolvido por Márlon Ramos</p>
		</footer>
	</div>



</body>
</html>