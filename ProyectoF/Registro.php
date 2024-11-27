<?php
require 'logica/autenticar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <title>Nuevo Registro</title>
    
</head>
<body>

    <header class="container" >
        <h3>Registro</h3>
    </header>
    
    <div class="container">
        <form action="./logica/enviarU.php" method="post">
     
            <hr>
            <div class="input-field">
                
                <label for="usuario"></label>
                <input type="text" name="usuario" required maxlength="100" placeholder="Determina tu Usuario">
                <br><br>
                <label for="nombre"></label>
                <input type="text" name="nombre" required maxlength="100" placeholder="Ingresa tu/s nombre/s">
                <br><br>
                <label for="apellido_paterno"></label>
                <input type="text" name="apellido_paterno" required maxlength="100" placeholder="Ingresa tu Primero Apellido">
                <br><br>
                <label for="apellido_materno"></label>
                <input type="text" name="apellido_materno" required maxlength="100" placeholder="Ingresa tu Segundo Apellido">
                <br><br>
                <label for="puesto"></label>
                <input type="text" name="puesto" required maxlength="100" placeholder="Escribe tu Rol">
                <br><br>
                <label for="no_identificacion"></label>
                <input type="text" name="no_identificacion" required maxlength="100" placeholder="Cual es tu No. de agente">
                <br><br>
                <label for="telefono"></label>
                <input type="text" name="telefono" required maxlength="10" placeholder="No de Tel">
                <br><br>
                <label for="email"></label>
                <input type="email" name="email" required maxlength="100" placeholder="Correo">
                <br><br>
              
                <label for="password"></label>
                <input type="password" name="password" required maxlength="8" placeholder="Asigna tu contraseña">
                <br><br>
            </div>
             <button type="submit" name="submit" class="btn waves-effect waves-light"  >Añadir Registro</button>
        </form>
    </div>

    <div class="container">
    <br />
    <br />
    <a class="btn" href='./Registro.php'>Nuevo registro</a>
    <a class="btn" href='./inicio.php'>Registros</a>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

