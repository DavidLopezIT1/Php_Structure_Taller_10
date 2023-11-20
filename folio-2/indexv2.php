<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$User_Name = $_REQUEST [ "User_Name"];
$User_Cedula = $_REQUEST [ "User_Cedula"];
$User_Edad = $_REQUEST [ "User_Edad"];


echo "Buen día  " . $User_Name . "Según sus los datos suministraos su cédula es (" . $User_Cedula . ") " . "y su edad es (" .$User_Edad . ")";

if($User_Edad <= 18){
    echo "\n\n Por lo cual NO Puede ingresar ya que usted NO es mayor de edad\n\n";
}
else{
     echo "\n\nPor lo cual Puede ingresar ya que usted es mayor de edad\n\n";
}

    ?>

</body>
</html>