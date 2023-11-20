<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style1-2.css">
  <title>Resultados</title>
</head>
<body>

<?php 


$select = $_GET["Type_operation"];
$UserName = $_GET["UserName"];
$Number1 = $_GET["Number1"];
$Number2 = $_GET["Number2"];
?> 
<div>
<span> <?php echo "\n\n\n Interfáz de Resultados\n\n\n"; ?> </span>
</div>
<div>
<span> <?php  echo "\n\n\n Buenas tardes $UserName \n\n\n"; ?> </span>
</div>
<div>
<span> <?php echo "Usted eligió como operación - (" . $select . ")"; ?> </span>
</div>
<div>
<span> <?php 
switch($select){
    case "Suma":
       echo "  " . "El resultado de " . $Number1 . " + " . $Number2 . " es =  "  . ($Number1 + $Number2); 
    break;
    case "Resta":
            echo "  " . "El resultado de " . $Number1 . " - " . $Number2 . " es =  "  . ($Number1 - $Number2);
    break;
    case "Multiplicación":
      echo "  " . "El resultado de " . $Number1 . " * " . $Number2 . " es =  "  . ($Number1 * $Number2);

    break;
    case "División":
      echo "  " . "El resultado de " . $Number1 . " / " . $Number2 . " es =  "  . ($Number1 / $Number2);
    break;
    case "Select":
              echo "   NO ha elegido ningun criterio para su operación";
    break;
    
  }



  ?> </span>
</div>
</body>
</html>