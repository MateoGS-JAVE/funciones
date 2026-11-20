<?php

function convertirMinusculas($texto) {
    return strtolower(trim($texto));
}

function limpiarNombre($nombre) {
    $nombreMinusculas = convertirMinusculas($nombre);
    return str_replace(" ", "", $nombreMinusculas);
}

function obtenerInstitucion($institucion) {
    $institucionLimpia = convertirMinusculas($institucion);
    if (strlen($institucionLimpia) < 2) {
        return $institucionLimpia;
    }
    return substr($institucionLimpia, 0, 2);
}

function obtenerAnio($anio) {
    $anioLimpio = trim((string)$anio);
    if (strlen($anioLimpio) < 2) {
        return $anioLimpio;
    }
    return substr($anioLimpio, -2);
}

function generarUsuario($nombre, $institucion, $anio) {
    $usuarioBase = limpiarNombre($nombre);
    $codigoInstitucion = obtenerInstitucion($institucion);
    $dosDigitosAnio = obtenerAnio($anio);
    return $usuarioBase . $codigoInstitucion . $dosDigitosAnio;
}