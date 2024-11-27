<?php
require 'logica/autenticar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <title>Eliminar Usuario</title>
    
</head>

<body>
    <div class = "container">
    <h1 class="center-align">Eliminar Registro</h1>
        <form class="center-align" method="POST" action="./logica/eliminarU.php">
            <div class="input-field">
                <input type="text" name="usuario" id="usuario" placeholder="Usuario a eliminar" required>
                <label for="usuario"></label>
            </div>
            <button type="submit" class="btn waves-effect waves-light">Dar de baja</button>
        </form>
        
        <h1 class="center-align"><a class="btn" href="inicio.php">Registros</a></h1>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>