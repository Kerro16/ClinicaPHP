<<?php
    
  function limpiarDatos($datos){
    $datos = htmlspecialchars($datos);
    $datos = trim($datos);
    $datos = filter_var($datos, FILTER_SANITIZE_STRING);
    return $datos;
  }

    if(!isset($_POST['login'])){
        header('Location: login.php');
        die('Petición no válida, redireccionando al Login...');
    }
    
    include 'db-mysqli.php';    
    $user = limpiarDatos($_POST['user']);
    $pass = limpiarDatos($_POST['pass']);

 $consulta = 'SELECT * FROM usuario WHERE  user="'.$user.'" and pass="'.$pass.'" LIMIT 1';    
    $result = $db->query($consulta);

 if($result && $row = mysqli_fetch_array($result)){
        session_start();
        $_SESSION['id_usuario'] = $row['id_usuario'];
        $_SESSION['id_cargo'] = $row['id_cargo'];
              $_SESSION['page_count'] = $user ;

        if ($_SESSION['id_cargo'] == 2) {
            $_SESSION['id_medico'] = $row['id_medico'];
        }

        header('Location: inicio.php');
          exit();
        die('Acceso válido, redireccionando a menú...');  
    }else{
        header('Location: login.php');
        die('Usuario no válido, redireccionando al Login...');
    }

   
