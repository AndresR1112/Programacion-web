<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
   
</head>

<body>

    <div class="container">
        <h1 class="center-align">Iniciar Sesión</h1>
        <form method="POST" action="logica/loguear.php" class="col s12 m6 offset-m3">
            <div class="input-field">
                <input type="text" name="Usuario" id="usuario" required>
                <label for="usuario">Usuario</label>
            </div>
            
            <div class="input-field">
                <input type="password" name="clave" id="clave" required>
                <label for="clave">Contraseña</label>
            </div>

            <button type="submit" class="btn waves-effect waves-light">Iniciar Sesión</button>
        </form>
    </div>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>