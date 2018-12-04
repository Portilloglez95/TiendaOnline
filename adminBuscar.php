<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "proyectoweb18b";
$articulo=$_GET["articulo"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id_producto, nombre, precio, cantidad
        FROM producto WHERE nombre LIKE '$articulo%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		echo "El ID " . $row["id_producto"] . " Corresponde al Producto: <br>";
		echo "<h3>". "Nombre---->" . $row["nombre"] ." <br> ". "Precio-----> " . $row["precio"] ." <br> ". "Cantidad---->" . $row["cantidad"] ."</h3><br>";      
    }
} else {
    echo "0 results";
}
	
	echo "<h1>Qué deseas hacer? </h1>";
	echo "<h3><a href='modificar.php'>MODIFICAR</a></h3>";
	echo "<h3><a href='eliminar.php'>ELIMINAR</a></h3>";

mysqli_close($conn);
?>

<h3><a href="adminPanel.php">REGRESAR</a></h3></li>
</body>
</html>