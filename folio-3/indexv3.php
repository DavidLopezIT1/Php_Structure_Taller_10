<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3-2.css"> 
    <title title="Formulario GET - REQUEST">First Form</title>
    
</head>
<body>
    <header>
    <h1>Formulario de datos básicos</h1>
    </header>

    <main>
    <form action="index3.php" method="post">
    <div class="General">
        <div>
        <label for="name" class="Label"> Ingrese su nombre</label>
        </div>


        <div>
        <input type="text" name="name" id="name" >
         </div>

    
         <div>
        <label for="age" class="Label"> Ingrese su edad</label>
        </div>

        <div>
        <input type="text" name="age" id="age">
         </div>

        <div>
        <label for="cedule"> Ingrese su Número de Cédula</label>
        </div>

        <div>
        <input type="number" name="cedule" id="cedule"> 
        </div>

        <div class="Button1">
        <button>Send Info</button>
        </div>

         <div class="Button2">
         <button>
            <a href="../index.html">Inicio</a> </button>
            
         </div>

    </div>
    </form>
    </main>
</body>
</html>
