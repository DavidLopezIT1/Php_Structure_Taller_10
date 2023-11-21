<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">

    
    <title>Formulario-P1</title>
</head>
<body>
    <header>
    <h1>
        Interfaz Matemática.
    </h1>
    </header>
    <main>

        <form action="./index1.php" method="get">

    <fieldset lass="fieldset">

        <div class="NameUserrr">
            <label for="UserName" class="NameLection" > Digita tu nombre</label>
            <br>
            <input type="text" name="UserName" id="UserName">
        </div>

        <div class="Select_1">
            <label for="Type_operation" class="Election"> Elija tipo de operación desea realizar</label>
            <br>
            <select name="Type_operation" id="Type_operation1">
                <option value="Select" name="Select"></option>
                <option value="Suma" name="Suma">Suma</option>
                <option value="Resta" name="Resta">Resta</option>
                <option value="Multiplicación" name="Multiplicación">Multiplicación</option>
                <option value="División" name="División">División</option>
            </select>
        </div>
        
        <div class="Number1">
             <label for="Number1"> Digite el primer número</label>
             <br>
              <input type="number" name="Number1" id="Number1">
        </div>

        <div class="Number2">
        <label for="Number2"> Digite el Segundo número</label>
        <br>
       <input type="number" name="Number2" id="Number2">
       </div>

        <div class="Button_Submit">
            <input type="submit" name="Enviar" id="Enviar">
        </div>
        
        </fieldset>
        </form>
        
    </main>
    <footer>
        <span>
            Gracias por usar nuestra interfaz matemática
        </span>
    </footer>

</body>
</html>