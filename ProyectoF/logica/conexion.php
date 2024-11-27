<?php

$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "";
$db_name = "ProyectoF";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>