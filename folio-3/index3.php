<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Punto-3</title> 
    
</head>
<body>

<header>
<h1>
Formulario de datos básicos - Resultados de consola
</h1>
</header>

<main>
<?php

$edad = $_REQUEST[ "age"];
$nombre = $_REQUEST[ "name"];
$cedule = $_REQUEST[ "cedule"];

?>
 <div>
 <span> 
    <?php  
    if ($nombre == null ) {
        echo "NO ha digitado ningún nombre : \n\n";
    } 
    else{
        echo "El nombre es : " . $nombre . "\n\n"; 
         } ?> </span>
        
 </div>

 <div>
 <span> 
    <?php  
    if ($edad == null ) {
        echo "NO ha digitado su Edad : \n\n";
    } 
    else{
        echo "La edad es : " . $edad . "\n\n"; 
         } ?> </span>
 </div>

 <div>
 <span> 
    <?php  
    if ($cedule == null ) {
        echo "NO ha digitado su Cédula : \n\n";
    } 
    else{
        echo "La cédula es : " . $cedule . "\n\n"; 
         } ?> </span>
 </div>

<div>
<button>
<a href="indexv3.php"> Volver</a>
</button>
</div>

<div>
<button>
<a href="../index.html"> Inicio</a>
</button>

<style>
    a{
        text-decoration:none;
    }
</style>
</div>

</main>

<footer>

</footer>
</body>
</html>