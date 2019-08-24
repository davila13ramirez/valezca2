<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet"  type"text/css" href="CSS\login.css"/>
	</head>
	
	<body background="IMG\fondo2.jpg">
			<!ACTION REDIRIGE AL ARCHIVO DE LA CARPTA PHP LOGIN> 
		<form action="PHP\login.php" method="post">
		<h2>Login</h2>
		<!AUTOCOMPLETE ES PARA QUE NO GUARDE DATOS EL CAMPO> 
		<input type="text" placeholder="Nombre Usuario" name="usuario" autocomplete="off"/>
		<input type="password" placeholder="Password" name="clave" />
		<input type="submit" value="ingresar">
		</form>
	</body>
</html>