<?php
function obtenerIniciales($nombre) {
    $nombreLimpio = trim($nombre);
    if (strlen($nombreLimpio) < 3) {
        return strtoupper($nombreLimpio);
    }
    return strtoupper(substr($nombreLimpio, 0, 3));
}
function obtenerAnio($fecha) {
    $fechaLimpia = trim($fecha);
    if (strlen($fechaLimpia) < 4) {
        return "";
    }
    return substr($fechaLimpia, 2, 2);
}
function obtenerMesDia($fecha) {
    $fechaLimpia = trim($fecha);
    if (strlen($fechaLimpia) < 10) {
        return "";
    }
    $mes = substr($fechaLimpia, 5, 2);
    $dia = substr($fechaLimpia, 8, 2);
    return $mes . $dia;
}
function generarClave($nombre, $fecha) {
    $iniciales = obtenerIniciales($nombre);
    $anio = obtenerAnio($fecha);
    $mesDia = obtenerMesDia($fecha);
    return $iniciales . $anio . $mesDia;
}