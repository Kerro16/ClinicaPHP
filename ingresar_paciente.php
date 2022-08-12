<?php
session_start();
include_once("db-mysqli.php");
if(isset($_POST["guardar"])){


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];
$n_telefono = $_POST['n_telefono'];
$dui = $_POST['dui'];
$nit = $_POST['nit'];
$nom_persoR = $_POST['nom_persoR'];
$apellido_persoR = $_POST['apellido_persoR'];
$tel_persoR = $_POST['tel_persoR'];
$motivo_consulta = $_POST['motivo_consulta'];
$alergia = $_POST['alergia'];
$medicamentos = $_POST['medicamentos'];




$consulta= "INSERT INTO paciente(nombre , apellidos, fecha_nacimiento,genero,
direccion, n_telefono,dui,nit,nom_persoR,apellido_persoR,tel_persoR, 
motivo_consulta,alergia,medicamentos) 
VALUES ('".$nombre."','".$apellidos."', '".$fecha_nacimiento."', '".$genero."', 
'".$direccion."', '".$n_telefono."', '".$dui."', '".$nit."', '".$nom_persoR."',
'".$apellido_persoR."','".$tel_persoR."','".$motivo_consulta."','".$alergia."',
'".$medicamentos."')"; 




$sentencia = $db->query($consulta);

//$sentencia->bind_param($nombre, $apellidos, $fecha_nacimiento,$genero, 
//	$direccion, $n_telefono,$dui, $nit, $id_persoR,$id_cita, $fecha_ingreso);

//$sentencia->execute();
if($sentencia){
	include_once("mostrarpaciente.php");
	
}

$db->close();


}else
	echo("Petición no válida.");


?>