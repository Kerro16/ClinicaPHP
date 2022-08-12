<?php
session_start();
include_once("db-mysqli.php");
//include 'ingreso_usuarios.php'

if(isset($_POST["guardar"])){

    $asunto = $_POST['title'];
    $patient_id = $_POST['patient_id'];
    $medic_id = $_POST['medic_id'];
    $fecha = $_POST['date_at'];
    $hora = $_POST['time_at'];

    $query= "INSERT INTO cita(motivo, id_paciente, id_medico, fecha, hora, id_estado_citas) VALUES ('$asunto', '$patient_id', '$medic_id', '$fecha', '$hora', 1)"; 

    $sentencia = $db->query($query);
      if(!$sentencia) {
        die("Query Failed.");
      }else{
        echo "<script>alert('Cita registrada');</script>";
        header("Location: citas_hoyform.php");
      }

    $db->close();


}else if(isset($_GET['id']) && $_GET['delete'] != "true"){

	 $id = $_GET['id'];
  $query = "SELECT * FROM cita WHERE id_cita=$id";
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $asunto = $row['motivo'];
    $id_paciente = $row['id_paciente'];
    $id_medico = $row['id_medico'];
    $fecha = $row['fecha'];
    $hora = $row['hora'];
    $id_estado_citas = $row['id_estado_citas'];
	}
}else if(isset($_POST["actualizar"])){

    $id = $_POST['id'];
    $asunto = $_POST['title'];
    $id_paciente = $_POST['patient_id'];
    $id_medico = $_POST['medic_id'];
    $fecha = $_POST['date_at'];
    $hora = $_POST['time_at'];
    $id_estado_citas = $_POST['id_estado_citas'];

  $query = "UPDATE cita set motivo = '$asunto', id_paciente = '$id_paciente', id_medico = '$id_medico', fecha = '$fecha', hora = '$hora', id_estado_citas = $id_estado_citas WHERE id_cita=$id";
    
  $sentencia = $db->query($query);
  if(!$sentencia) {
    die("Query Failed.");
  }else{
    echo "<script>alert('Actaulización realizada');</script>";
    header('Location: citas_hoyform.php');
  }
      $db->close();

}elseif (isset($_GET['id']) && $_GET['delete'] == "true") {
  
  $id = $_GET['id'];
  $query = "UPDATE cita set id_estado_citas = 3 WHERE id_cita = $id";
  $sentencia = $db->query($query);
 
  if(!$sentencia) {
    die("Query Failed.");
  }else{
    echo "<script>alert('Usuario eliminado');</script>";
    header('Location: citas_hoyform.php');
    $db->close();
  }

}else
	echo("Petición no válida.");

?>