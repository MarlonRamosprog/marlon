<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style_blog.css">
	<title>Márlon Ramos - Blog</title>
</head>
<body>
	<?php require ("coluna_esquerda.php"); ?>	

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

								<p>" . $row ["texto"] . "...</p>

								<form action='post.php' method='post'>
								    <input type='hidden' name='id' value=" . $row['id'] .">
								    <input type='submit' name='deletar' value='Ver mais'/>
								</form>		

								<hr />
							</div>";
				}
			} else {
				echo"<p>Não há postagens disponíveis.</p>";
			}

			$conectar->close();
			?>
		</div>

		<?php require ("rodape.php"); ?>
	</div>



</body>
</html>