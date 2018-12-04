<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "proyectoweb18b";

$ID=$_GET["id"];
$nombre=$_GET["nombre"];
$precio=$_GET["precio"];
$cantidad=$_GET["cantidad"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sql = "UPDATE producto SET nombre='$nombre', precio='$precio', cantidad='$cantidad' WHERE id_producto='$ID'";

if (mysqli_query($conn, $sql)) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error actualizando registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>