<?php

require 'logica/autenticar.php';
require 'logica/conexion.php';
// se usa el requiere para si psi se necesita el archivo conexion

mysqli_set_charset($conexion,'utf8');


//genear el query
$consulta_sql="SELECT * FROM empleado";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    
</head>
<body>
    <div class = "container">
        <h2>Trabajadores</h2>
        <?php if($count >0): ?>
            <table class= "striped highlight responsive-table">
                <thead>
                    <tr>
                     <th>Usuario</th>
                     <th>Nombres</th>
                     <th>Primer Apellido</th>
                     <th>Segundo Apellido</th>
                     <th>Rol</th>
                     <th>No. de agente</th>
                     <th>Tel</th>
                     <th>Correo</th>
                     <th>Password</th>
                     <th>Fecha de Registro</th>
                     <th>Accesos</th>
                    </tr>
                </thead>
                <tbody>
                     <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <?php
                            
                            echo"<td>". $row['usuario'] ."</td>";
                            echo"<td>". $row['nombre'] ."</td>";
                            echo"<td>". $row['apellido_paterno'] ."</td>";
                            echo"<td>". $row['apellido_materno'] ."</td>";
                            echo"<td>". $row['puesto'] ."</td>";
                            echo"<td>". $row['no_identificacion'] ."</td>";
                            echo"<td>". $row['telefono'] ."</td>";
                            echo"<td>". $row['email'] ."</td>";
                            echo"<td>". $row['password'] ."</td>";
                            echo"<td>". $row['fecha_registro'] ."</td>";
                            echo"<td>". $row['permisos'] ."</td>";
                            
                            ?>
                        </tr>
                        <?php endwhile; ?>
                </tbody>

            </table>
            <?php endif; ?>
    <br>                    
    <a class="btn waves-effect waves-light" href="eliminarUsuario.php" >Borrar Resgistro</a>
    <br>
    <br>
    <a class="btn waves-effect waves-light" href="Registro.php">Nuevo Registro</a>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
