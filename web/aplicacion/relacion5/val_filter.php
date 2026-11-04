<?php

namespace VALFILTER;

function validaEntero(int &$var, int $min, int $max, int $defecto):bool{
   
    

}

function validaReal(float &$var, float $min, float $max, float $defecto):bool{
    $valido = true;

    if($var < $min || $var > $max){
        $valido = false;
    }

    if($valido == false){
        $var = $defecto;
    }

    return $valido;
}

