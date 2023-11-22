<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4-2.css">
    <title>Resultados Point - 4</title>
</head>
<body>
    <header>
        <h1>Consola de resultados (Edad Usuario)</h1>
    </header>

    <main>

<?php 
$num1 = 0;
$num2 = 0;

date("Y/m/d") ;

$name_User = $_REQUEST["Name_User"];
$Cedule = $_REQUEST["Cedule"];
$User_Date_Nac = $_REQUEST["User_Date_Nac"];

$Result = date("Y/m/d") - $User_Date_Nac;

?>

<div>
<span> <?php 
echo " Hola " . $name_User;
?></span> 
</div>
 
<div>
<span> <?php 
echo " Su cédula es " . $Cedule;
?></span>
</div>

<div>
<span> <?php 

if($Result <=17){
    echo"Su edad es ". $Result .  " años, por tanto: No es mayor de edad";
   }
   else {
     echo"Su edad es " . $Result . " años, por tanto: Es mayor de edad";
   }

?></span>
</div>

    <div><button>
    <a href="index4.php">Volver</a>
    </button></div>

    <div><button>
    <a href="../index.html">Inicio</a>
    </button></div>
    </main>

</body>

</html>