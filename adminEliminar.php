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
$id=$_GET["id"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sqlbai = "DELETE FROM usuario WHERE id_producto=$id";

if (mysqli_query($conn, $sqlbai)) {
    echo "El registro ha sido borrado.";
} else {
    echo "No se pudo borrar: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<h3><a href="adminPanel.php">REGRESAR</a></h3></li>
</body>
</html>