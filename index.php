<?php

require_once 'Cliente.php';
require_once 'Conexion.php';

if (!empty($_POST)) {
    $datos = [];
    $datos[] = $_POST['nombre-completo'] ?? '';
    $datos[] = $_POST['email'] ?? '';
    $cl = new Cliente();
    $cl::llenar($datos);

}
?>

<html lang="es">
<head>
    <title>Formulario</title>
</head>
<body>
<form action="" method="post">
    <label for="nombre-completo">Nombre Completo</label>
    <input type="text" id="nombre-completo" name="nombre-completo" placeholder="Nombre">
    <label for="email">Correo Electrónico</label>
    <input type="email" id="email" name="email" placeholder="ejemplo@ejemplo.com">
    <input type="submit" value="Guardar">
</form>
</body>
</html>