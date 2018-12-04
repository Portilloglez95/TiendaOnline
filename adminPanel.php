<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <style>

.logo img{
  width: 290px;
  height: 205px;
  margin-left: 510px;
  margin-top: -10px;
  margin-bottom:20px;
  border-radius: 100px;
}

.logo img:hover {
  cursor: pointer;
  background:#E1ECFF;
  -webkit-transform:scale(1.1);transform:scale(1.0);
}

h1 {
	text-align: center;
	font-size: 38px;
	border: 1px solid black;
	color:black;
	background:#8EADF7;
	margin-bottom:40px;
  margin-top:-20px;
}

p {
  text-align: center;
  font-size: 22px;
}

ul li {
	margin-bottom:-10px;
	margin-left: 550px;
	font-size: 22px;
}

.boton-regresar {
  width: 220px;
  font-family: Verdana; 
  font-size: 10pt;
  font-weight: bold;
}

.logout {
  margin-left:590px;
  margin-top: 10px;
  font-size: 22px;
}

  </style>
</head>
<body>
    <div class="logo">
  		<a href="admin.php">
  		<img src="img/admin.jpg" alt="Icono de admin de sistema">
  		</a>
	</div>

<h1>Sesión Administrador</h1>
<p>En esta sección usted puede realizar acciones de insertar, buscar, alterar y eliminar<br>Productos de  <b>Natural Company</b>.</p>


<ul>
	<li><h3><a href="adminCapturar.html">INSERTAR</a></h3></li>
	<li><h3><a href="adminBuscar.html">BUSCAR</a></h3></li>
	<li><h3><a href="adminModificar.html">MODIFICAR</a></h3></li>
	<li><h3><a href="adminEliminar.html">ELIMINAR</a></h3></li>
</ul>

<a href="logout.php"><button class="logout">Cerrar sesión</button></a>

</body>
</html>