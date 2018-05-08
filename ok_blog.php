<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Realizado com Sucesso!</title>
	<meta charset="UTF-8">	
	<link rel="stylesheet" type="text/css" href="style_webmaster.css">
</head>
<body>
	<div class="menu">		
		<?php
			//recebendo dados do form
			$titulo = $_POST["titulo"];
			$texto = $_POST["texto"];
			$nome_imagem = $_POST['nome_imagem'];

			//salvando imagem no servidor
			$destino = 'img/' . $_FILES['arquivo']['name'];
			$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
			move_uploaded_file($arquivo_tmp, $destino);
			echo "feito!<p><a href='index.html'>Voltar!</a></p>";
			
			//conectando
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "marlon";

			$conn = new mysqli($servidor, $usuario, $senha, $banco);
			
			if ($conn->connect_error) 
			{
				die("Conexão falhou! " . $conn->connect_error);
			} 

			//inserindo banda nova
			$sql = "INSERT INTO blog (titulo, imagem, texto) VALUES ('$titulo', '$nome_imagem', '$texto')";			
			if ($conn->query($sql) === TRUE) {
			    echo "<p class='text-center'>Postagem cadastrada com Sucesso!</p><br />";
			} else {
			    die("Fodel!");
			}

			$conn->close();
		?>
	</div>
</body>
</html>