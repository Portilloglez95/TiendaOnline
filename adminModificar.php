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
$ID=$_GET["id"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id_producto, nombre, precio, cantidad FROM producto 
	WHERE id_producto='$ID'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		
	?>	
		<form action='cambio.php' method='get'>
		<table>
			<tr>
				<td>ID: </td>
				<td><input type='text' name='id' value="<?php echo $row["id_producto"];?>"></td>
			</tr> 
			<tr>
				<td>Nombre:</td>
				<td><input type='text' name='nombre' value="<?php echo $row["nombre"];?>"></td>
			</tr>                                
			<tr>
				<td>Precio:</td>
				<td><input type='text' name='precio' value="<?php echo $row["precio"];?>"></td>
			</tr>
			<tr>
				<td>Cantidad:</td>
				<td><input type='text' name='cantidad' value="<?php echo $row["cantidad"];?>"></td>
			</tr>
		</table>
		<br><br>
		<input type='submit' value='Submit'>
		</form>
	<?php
      
    }
} else {
    echo "0 results";
}
	
mysqli_close($conn);
?>

<h3><a href="adminPanel.php">REGRESAR</a></h3></li>
</body>
</html>