<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$registroEliminado = $_POST['usuario'];

$stmt = $conexion->prepare("DELETE FROM empleado WHERE usuario = ?");
$stmt->bind_param("s", $registroEliminado);

if ($stmt->execute()) {
    echo "Registro eliminado con éxito.";
} else {
    echo "Error al eliminar el registro: " . $stmt->error;
}

$stmt->close();
$conexion->close();

header('Location: ../eliminarUsuario.php');
?>