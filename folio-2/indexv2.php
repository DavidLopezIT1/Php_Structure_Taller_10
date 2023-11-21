<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2-2.css">
    <title>Request Punto 2</title>
</head>
<body>
<header>
    <h1>
    FORMULARIO DE INGRESO- Resultado de Solicitud.
    </h1>
</header>
<main>
    <?php

$User_Name = $_REQUEST [ "User_Name"];
$User_Cedula = $_REQUEST [ "User_Cedula"];
$User_Edad = $_REQUEST [ "User_Edad"];

?>
<div>
<span class="User_Name" > <?php echo "Buen día  " . $User_Name ; ?> </span>
</div>
<div>
<span class="Datos_Sumin" > <?php echo " Según sus los datos suministraos su cédula es (" . $User_Cedula . ") "; ?> </span>
</div>
<div>
<span class="Edad" > <?php echo "y su edad es (" .$User_Edad . ")"; ?> </span>
</div>

<div>
<span class="IF_Else"> 
    
    <?php 

if($User_Edad <= 17){
    echo "\n\n Por lo cual NO Puede ingresar ya que usted NO es mayor de edad\n\n";
}
else{
     echo "\n\nPor lo cual Puede ingresar ya que usted es mayor de edad\n\n";
}
?> </span>
  </div>
  </main>
  <footer>
    <div class="Footer1" >
    <span>Gracias por usar nuestro Revisor de Edad</span>
    <div/>
    <button>
        <a href="index2.php">Volver</a>
    </button>
    <button>
        <a href="../index.html">Inicio</a>
    </button>
  </footer>
</body>
</html>