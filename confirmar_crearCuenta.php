<!--Fabián Portillo González-->
<!DOCTYPE html>
<html>
<head>
	<title>Confirmar cuenta de usuario </title>
	<style type="text/css">
		body{
			background-color: #333;
		}
		div.RegUsr{
			background-color: white;
			color: red;
			font-weight: bold;
			font-size: 40px;
			font-family: arial;
			text-align: center;
			margin: auto;
			width: 25%;
			min-width: 500px;
			margin-top: 50px;
			padding: 40px;
			border-radius: 5px;
			border: dashed black 10px;
		}
		div.RegUsr a{
			color: blue;
		}
		.LHome img{
			height: 50px;
		}
		div{
			margin-top: 50px;
			width: 100%;
			text-align: center;
		}
	</style>
</head>
<body>

<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "proyectoweb18b";

$form_nom = $_POST['nombre'];
$form_apes = $_POST['apellido'];
$form_email = $_POST['correoe'];
$form_pass = $_POST['clave'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = $conn->real_query("INSERT INTO usuario (nombre_u, apellido_u, correoe_u, clave_u)
		VALUES ('$form_nom', '$form_apes', '$form_email' , '$form_pass,)");

$verificar_correo = mysqli_query($conn, "SELECT * FROM usuario WHERE correoe_u = '$form_email'");

	echo "<div>";
	echo "<a class='LHome' href='crearCuenta.php'><img src='Img/nat_com.jpg'></a>";
	echo "</div>";

if (!mysqli_num_rows($verificar_correo) <1){
		echo "<div class='RegUsr'>";

		echo "<br />". "Este correo electronico ya ha sido registrado en otra cuenta..." . "<br />";

		echo "<a href='crearCuenta.php'>Por favor ingrese otra direccion de correo electronico</a>";
		echo "</div>";    
	exit;
}
//Ejecutar consulta
$resultado = mysqli_query($conn, $query);
if (!$resultado) {
	echo "<div class='RegUsr'>";
	echo "Error al crear la cuenta." . $query . "<br>" . $conn->error;
	echo "</div>";
} else {
	echo "<div class='RegUsr'>";
	echo "<br />" . "<h2>" . "Cuenta Creada Exitosamente" . "</h2>";
	echo "<h4>" . "Bienvenido: " . "$form_nom" . "</h4>" . "\n\n";
	echo "</div>"; 
}

header("refresh:2; url:indeex.php");

mysqli_close($conn);
?>

</body>
</html>