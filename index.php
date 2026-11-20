<?php
require_once "ejercicio1_clave.php";
require_once "ejercicio2_usuario.php";

$claveGenerada = "";
$usuarioGenerado = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accion = $_POST["accion"] ?? "";

    if ($accion === "clave") {
        $nombreClave = $_POST["nombre_clave"] ?? "";
        $fechaNac = $_POST["fecha_nac"] ?? "";
        $claveGenerada = generarClave($nombreClave, $fechaNac);
    }

    if ($accion === "usuario") {
        $nombreUser = $_POST["nombre_user"] ?? "";
        $institucion = $_POST["institucion"] ?? "";
        $anioIngreso = $_POST["anio_ingreso"] ?? "";
        $usuarioGenerado = generarUsuario($nombreUser, $institucion, $anioIngreso);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea 2.9 - Funciones PHP</title>
</head>
<body>
    <h1>Pruebas - Tarea 2.9</h1>

    <h2>Ejercicio 1: Generador de Clave</h2>
    <form method="POST">
        <label>Nombre completo:</label><br>
        <input type="text" name="nombre_clave" required><br><br>

        <label>Fecha de nacimiento (AAAA-MM-DD):</label><br>
        <input type="date" name="fecha_nac" required><br><br>

        <button type="submit" name="accion" value="clave">Generar clave</button>
    </form>
    <?php if ($claveGenerada !== ""): ?>
        <p><strong>Resultado:</strong> <?= htmlspecialchars($claveGenerada) ?></p>
    <?php endif; ?>

    <hr>

    <h2>Ejercicio 2: Generador de Usuario</h2>
    <form method="POST">
        <label>Nombre completo:</label><br>
        <input type="text" name="nombre_user" required><br><br>

        <label>Institución educativa:</label><br>
        <input type="text" name="institucion" required><br><br>

        <label>Año de ingreso:</label><br>
        <input type="number" name="anio_ingreso" min="1900" max="2100" required><br><br>

        <button type="submit" name="accion" value="usuario">Generar usuario</button>
    </form>
    <?php if ($usuarioGenerado !== ""): ?>
        <p><strong>Resultado:</strong> <?= htmlspecialchars($usuarioGenerado) ?></p>
    <?php endif; ?>
</body>
</html>