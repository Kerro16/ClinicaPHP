<?php
session_start();
include_once("db-mysqli.php");
if(isset($_POST["create"])){


$user= $_POST['usuario1'];
$pass = $_POST['pass1'];
$role = $_POST['role1'];



$consulta= "INSERT INTO usuario(user , pass, id_cargo) VALUES ('".$user."','".$pass."','".$role."')"; 




$sentencia = $db->query($consulta);
//$sentencia->bind_param($nombre, $apellidos, $fecha_nacimiento,$genero, 
//	$direccion, $n_telefono,$dui, $nit, $id_persoR,$id_cita, $fecha_ingreso);

//$sentencia->execute();
if($sentencia){
    
	include_once("ingeso-usuarios-form.php" );

}

$db->close();


}else
	echo("Error en la conexion");
	

?>