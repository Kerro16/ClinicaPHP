<?php
session_start();
include_once("db-mysqli.php");
if(isset($_POST["enviar"])){

    $sintoma = $_POST['sintoma'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];
    //$fecha_cita = $_POST['fecha_cita'];
    $id_paciente = $_POST['id_paciente'];

    $query= "INSERT INTO motivo_consulta(sintoma, diagnostico, tratamiento, id_paciente) VALUES ('$sintoma', '$diagnostico', '$tratamiento', '$id_paciente')"; 

    $sentencia = $db->query($query);
      if(!$sentencia) {
        die("Query Failed.");
      }else{
        echo "<script>alert('Observación registrada');</script>";
        header("Location: historial_observaciones.php");
      }

    $db->close();


}else{
  echo "<script>alert('Fail');</script>";
}