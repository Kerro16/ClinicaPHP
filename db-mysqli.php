<?php
//Datos de conexión
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBDATA", "clinica");
//Creando el objeto de conexión a la base de datos con MySQLi
$db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATA);
//Verificar que la conexión se ha realizado o terminar
//el programa o secuencia de comando si no ha sido así
if($db->connect_errno){
 die("No se ha podido conectar a MySQL: (" . $db->connect_errno . ")" . $db->connect_error);
}
//Establecer el conjunto de caracteres para no tener problemas
//con los caracteres especiales del idioma español
$db->set_charset("utf8");
?>