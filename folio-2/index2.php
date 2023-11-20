<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">

    <title>Punto 2</title>
</head>
<body>
    <header>
        <h1>
            Formulario de Ingreso para Mayores de Edad
        </h1>
    </header>

    <main> 

    <form action="indexv2.php" method ="get" >
        <div class="General">
        <div>
          <label for="User_Name">Digite su nombre Completo</label><br>
          <input type="text" name="User_Name" placeholder ="Nombres y Apellidos">
        </div>
        <div>
          <label for="User_Cedula">Digite su Número de Cédula</label> <br>
          <input type="text" name="User_Cedula" placeholder ="Cédula Colombiana">
        </div>
        <div>
          <label for="User_Edad" class="Inp_Age">Digite su Edad</label><br>
          <input type="text" name="User_Edad" placeholder ="Ingresan Mayores de Edad">
        </div>
        <div>
            <label for="Send"></label>
            <input type="submit" class="Bton">
        </div>
        <button class="Button">
          <a href="../index.html">Inicio</a>
        </button>
        
        </form>
    </main>
    <footer>

    </footer>
    
</body>
</html>