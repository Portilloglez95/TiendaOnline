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

$nombre=$_GET["nombre"];
$precio=$_GET["precio"];
$cantidad=$_GET["cantidad"];

error_reporting(E_ERROR | E_WARNING | E_PARSE);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sql = "INSERT INTO producto (nombre, precio, cantidad)
VALUES ('$nombre','$precio','$cantidad')";

if ($conn->query($sql) == TRUE)  {
    echo "Nuevo producto agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<h3><a href="adminPanel.php">REGRESAR</a></h3></li>
</body>
</html>