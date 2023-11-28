<?php
//$server = "localhost";
//$user = "root";
//$pass = "";
//$db = "mi_proyecto";

$conexion = mysqli_connect("localhost", "root", "", "Mi_proyecto");

if ($conexion->connect_errno){ 
    die("Conexion Fallida" .$conexion->connect_error);
}

?>

