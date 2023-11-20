<?php

$select = $_GET["Type_operation"];
$UserName = $_GET["UserName"];
$Number1 = $_GET["Number1"];
$Number2 = $_GET["Number2"];

echo "\n\n\n Interfáz de Resultados\n\n\n";

echo "\n\n\n Buenas tardes $UserName \n\n\n";

echo "Usted eligió como operación " . $select;


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



?>
