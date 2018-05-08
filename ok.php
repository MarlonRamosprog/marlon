<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de postagem do blog</title>
</head>	
</body>
	<?php 
		$titulo = $_POST["titulo"];
		$imagem = $_POST["imagem"];
		$texto = $_POST["texto"];

		$host = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "marlon";

		$conectar = new mysqli($host, $usuario, $senha, $banco);

		if ($conectar->connect_error) {
			die("<p>Não foi possível conectar-se ao servidor!</p>");
		}

		$sql = "INSERT INTO blog(titulo, imagem, texto) VALUES('$titulo', '$imagem', '$texto');";

		if ($conectar->query($sql) === TRUE) {
			echo "Postagem publicada com sucesso!";
		} else {
			echo "Não foi possível publicar esta postagem!";
		}

		$conectar->close();
	?>
</body>
</html>