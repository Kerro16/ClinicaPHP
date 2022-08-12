<?php
    session_start();
    unset($_SESSION['id_usuario']);
    session_destroy();
    $baseurl = 'http://18.224.100.19/clinica/';
    header('Location: index.php');
    
