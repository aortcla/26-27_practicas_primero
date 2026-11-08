<?php

function validaEntero(int &$var, int $min, int $max, int $defecto):bool{
   
    $opciones = [
        'options' =>[
            'min_range' => $min,
            'max_range' => $max
        ]
    ];

    $resultado = filter_var($var, FILTER_VALIDATE_INT, $opciones);

    if ($resultado != false){
        $var =$resultado;
        return true;
    }
        $var=$defecto;
        return false;

}

function validaReal(float &$var, float $min, float $max, float $defecto):bool{

    $opciones = [
        'options' =>[
            'min_range' => $min,
            'max_range' => $max
        ]
    ];

    $resultado = filter_var($var, FILTER_VALIDATE_FLOAT, $opciones);

    if ($resultado != false){
        $var =$resultado;
        return true;
    }
        $var=$defecto;
        return false;

}

function validaFecha(string &$var, string $defecto): bool {
    if (preg_match('/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/', $var, $matches)) {
        $dia = (int) $matches[1];
        $mes = (int) $matches[2];
        $ano = (int) $matches[3];

        if (checkdate($mes, $dia, $ano)) {
            $timestamp = mktime(0, 0, 0, $mes, $dia, $ano);
            $var = date('d/m/Y', $timestamp);
            return true;
        }
    }

    $var = $defecto;
    return false;
}

function validaHora(string &$var, string $defecto): bool {
    if (preg_match('/^(\d{1,2}):(\d{1,2}):(\d{1,2})$/', $var, $matches)) {
        $hora = (int) $matches[1];
        $min  = (int) $matches[2];
        $seg  = (int) $matches[3];

        if ($hora >= 0 && $hora <= 23 && $min >= 0 && $min <= 59 && $seg >= 0 && $seg <= 59) {
            $hFmt = ($hora < 10 ? '0' : '') . $hora;
            $mFmt = ($min < 10 ? '0' : '') . $min;
            $sFmt = ($seg < 10 ? '0' : '') . $seg;

            $var = "$hFmt:$mFmt:$sFmt";
            return true;
        }
    }

    $var = $defecto;
    return false;
}

function validaEmail(string &$var, string $defecto):bool{

    if(filter_var($var, FILTER_VALIDATE_EMAIL)){
        return true;
    }

    $var = $defecto;
    return false;

}

function validaCadena(string &$var, int $longitud, string $defecto):bool{
    $opciones = [
        'options' =>[
            'max_range' => $longitud
        ]
    ];

  

    $resultado = filter_var(strlen($var), FILTER_VALIDATE_INT, $opciones);

    if ($resultado != false){
        return true;
    }
        $var=$defecto;
        return false;
    
}

function validaExpresion(string &$var, string $expresion, string $defecto): bool {
    if (preg_match($expresion, $var)) {
        return true;
    }

    $var = $defecto;    
    return false;
}

function validaRango(mixed $var, array $posibles, int $tipo = 1): bool {
    if ($tipo === 1) {
        return in_array($var, $posibles, true); 
    } elseif ($tipo === 2) {
        return array_key_exists($var, $posibles); 
    }

    return false; 
}   