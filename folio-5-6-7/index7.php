<?php

$conexion = mysqli_connect("localhost", "root", "", "Mi_proyecto");

if ($conexion->connect_errno){ 
    die("Conexion Fallida" .$conexion->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos</title>
</head>
<body>
    <header>
        <h1>Consulta de bases de datos</h1>
    </header>
    
<form action="" method="get">
    <input type="text" name="busqueda">
    <input type="submit" name="enviar" value="Get Inf">
    </div>
    </form>

    <form action="" method="get">
    <table>
   
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cédula</th>
    </thead>
   
    <tbody>
    <?php
    if(isset($_GET["enviar"])){
    $busqueda= $_GET["busqueda"];
    $consulta= $conexion->query("SELECT * FROM usuarios WHERE nombre or apellido or cédula  LIKE '%$busqueda%' ");
}
?>
<?php
        while($row =mysqli_fetch_array($consulta)){ 
        ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["nombre"]; ?></td>
        <td><?php echo $row["apellido"]; ?></td>
        <td><?php echo $row["cédula"]; ?></td>
    </tr>
            <?php } ?>
   

            <?php

           
    while($row= $consulta->fetch_array($consulta))  {      
    echo $row['id'] . $row['nombre'] . $row['apellido'] . $row['cédula'];
}

?>
   </form>




    

</body>
</html>