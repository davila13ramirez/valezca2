<?php 
 /*RESCATAMOS LAS VARIABLES DE LOS INPUT DEL LOGIN POR EL METODO POST
	Y SE GUARDAN EN LAS VARIABLES NUEVAS
 */
	session_start();
	$user=$_POST['usuario'];//usuarios ES EL NAME DEL INPUT
	$pass=$_POST['clave'];//clave ES EL NAME DEL INPUT
	
	$con=@mysqli_connect("b3xuzkag2yqgl1njyvgi-mysql.services.clever-cloud.com","u3s2hezbihhyu8j7","d9fKK2L2SAN8BjJ908pf","b3xuzkag2yqgl1njyvgi");
	$consulta="SELECT * FROM usuarios WHERE idnom='$user' and pass='$pass'";
	$resultado=mysqli_query($con, $consulta);
	
	$filas=mysqli_num_rows($resultado);
	
	if($filas>0){
		header("location:..\INICIO.html");
	}else{
		echo "error no hay ningun usuarios";
	}
?>