<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="style.css">
	<title> Menu TM</title>
	<meta charset="utf-8">
        
        <body bgcolor=#808080>           
</head>
<body>
    <h1>Inicia secion antes de entrar</h1>
     
	<?php
		
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			
			$usuario = $_POST['usuario'];
			$contrasena = $_POST['contraseña'];

			
			if ($usuario == 'usuario' && $contra == 'contra') {
				// Si el usuario y la contraseña son correctos, redirigir al usuario a la página de inicio
				header("location: inicio.html");
				exit;
			} else {
				
				echo '<p>Usuario y/o contraseña incorrectos.</p>';
			}
		}
	?>

	

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="usuario">Usuario:</label><br>
		<input type="text" id="usuario" name="usuario"><br>
		<label for="contrasena">Contraseña:</label><br>
		<input type="password" id="contrasena" name="Contraseña"><br><br>
                <div class =" enviar">
		<a href="set1.php"> <input type="buton" value="Entrar"> </a>
                </div>
	</form>

</body>
</html>
