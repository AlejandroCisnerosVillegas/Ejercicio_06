<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Generador de Tabla de Multiplicar</title>
		<link rel="icon" href="../../assets/img/logo.png">
		<link rel="apple-touch-icon" href="../../assets/img/logo-grande.png">
		<style>
			body {
				font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
				background-color: #f8f9fa;
				margin: 0;
				padding: 0;
			}
			.container {
				max-width: 600px;
				margin: 50px auto;
				padding: 30px;
				background-color: #fff;
				border-radius: 10px;
				box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
			}
			h1 {
				text-align: center;
				color: #007bff;
				margin-bottom: 30px;
			}
			form {
				display: flex;
				flex-direction: column;
				align-items: center;
			}
			input[type="number"] {
				width: 100%;
				padding: 12px;
				margin-bottom: 20px;
				border: 1px solid #ced4da;
				border-radius: 5px;
				box-sizing: border-box;
			}
			input[type="submit"] {
				width: 100%;
				background-color: #007bff;
				color: #fff;
				border: none;
				border-radius: 5px;
				cursor: pointer;
				padding: 15px;
				font-size: 16px;
				transition: background-color 0.3s ease;
			}
			input[type="submit"]:hover {
				background-color: #0056b3;
			}
			table {
				width: 100%;
				border-collapse: collapse;
				margin-top: 30px;
			}
			th, td {
				padding: 10px;
				text-align: center;
				border-bottom: 1px solid #ddd;
			}
			th {
				background-color: #007bff;
				color: #fff;
			}
			tr:nth-child(even) {
				background-color: #f2f2f2;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Tabla de Multiplicar</h1>
			<form action="ejercicio.php" method="GET">
				<input type="number" min="1" name="cajanumero" required placeholder="Ingrese un número">
				<input type="submit" value="Crear tabla">
			</form>

			<?php
				if(isset($_GET['cajanumero'])) {
					$numero = $_GET['cajanumero'];
					echo "<h2>Tabla de multiplicar del $numero</h2>";
					echo "<table>";
					echo "<tr><th>Número</th><th>Resultado</th></tr>";
					for($i = 1; $i <= 10; $i++) {
						$resultado = $numero * $i;
						echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
					}
					echo "</table>";
				}
			?>
		</div>
	</body>
</html>