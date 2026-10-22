<?php

function cuentaVeces(array &$array, string $cadena, int $num1, int &$num2): string | bool {
    $resultado = true;
    $num2++;
    
    if($cadena == "2daw" || $cadena == "primera"){
        $resultado = false;
    }else{
        $resultado = true;
    }

    if($resultado){
        $array[$cadena] = $num1;

        return "Llamada numero: ".$num2;
    }else{
        return $resultado;
    }
}


function generarCadena(int $num = 10): string | bool{
    $cadena = "";
    $cont = 0;
    $aleatorio = 0;

    if($num > 0 ){
        while($cont < $num){
            $aleatorio = mt_rand(65, 122);

            if($aleatorio != 91 && $aleatorio != 92 && $aleatorio != 93 && $aleatorio != 94 && $aleatorio != 95 && $aleatorio != 96){
                $cadena .= chr($aleatorio);
                $cont++;
            }
        }
        return $cadena;
    }else{
        return false;
    }

}

function operaciones(int $operacion, int $operando1, int $operando2, ...$operandos) :float {
    $resultado = 0;
    $pares = 0;
    $impares = 0;

    switch ($operacion) {
        case 1:
            $resultado += $operando1 + $operando2;
            foreach ($operandos as $num) {
                $resultado += $num;
            }
            break;
        case 2:
            $resultado = $operando1 - $operando2;
            foreach ($operandos as $num){
                $resultado -= $num;
            }
            break;
        case 3:
            $resultado = $operando1 * $operando2;
            foreach ($operandos as $num){
                $resultado += $resultado * $num;
            }
            break;
        default:
            foreach ($operandos as $indice => $num) {
                $indice++;

                if($num % 2 == 0){
                    $pares += $num;
                }else{
                    $impares += $num;
                }
            }
            $resultado = $pares - $impares;
    }

    return $resultado;
}
