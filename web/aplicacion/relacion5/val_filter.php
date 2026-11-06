<?php

namespace VALFILTER;

function validaEntero(int &$var, int $min, int $max, int $defecto):bool{
   
    $opciones = [
        "options" => [
            "min_range" => $min,
            "max_range" => $max
        ]
    ];

    $resultado = filter_var($var, FILTER_VALIDATE_INT, $opciones);

    if ($resultado !== false) {
        $var = $resultado;
        return true;
    } else {
        $var = $defecto;
        return false;
    }

}

function validaReal(float &$var, float $min, float $max, float $defecto):bool{
    $opciones = [
        "options" => [
            "min_range" => $min,
            "max_range" => $max
        ]
    ];

    $resultado = filter_var($var, FILTER_VALIDATE_INT, $opciones);

    if ($resultado !== false) {
        $var = $resultado; // El valor es correcto y se guarda saneado
        return true;
    } else {
        $var = $defecto;   // No cumple las condiciones, se asigna el defecto
        return false;
    }
}

