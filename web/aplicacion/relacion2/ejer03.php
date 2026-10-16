<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 2",
    "ENLACE"=> "/aplicacion/relacion2/index.php"
    ],
    [
    "TEXTO"=> "ejer3"
    ],
];

$caracteresPermitidos = [
    "a", "b", "c", "d", "e", "f", "g", "h", "i", "j",
     "k", "l", "m", "n", "o", "p", "q", "r", "s", "t",
      "u", "v", "w", "x", "y", "z", "A", "B", "C", "D",
       "E", "F", "G", "H", "I", "J", "K", "L", "M", "N",
        "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
];

$cadena = "";


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 3", $barra);
cuerpo($caracteresPermitidos, $cadena);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo( array $caracteresPermitidos, string $cadena){
    ?>
        <br><br>
        
    <?php

    for($i = 0; $i < 20; $i++){
        $num = mt_rand(0, count($caracteresPermitidos) - 1);
        $cadena .= $caracteresPermitidos[$num];
    }

    echo $cadena."<br>".PHP_EOL;

    $cadena = "";

    $cont = 0;
    while($cont < 20){
        $num = mt_rand(65, 122);
        if($num != 91 && $num != 92 && $num != 93 && $num != 94 && $num != 95 && $num != 96){
            $cadena .= chr($num);
            $cont++;
        }
    }

    echo $cadena."<br>".PHP_EOL; 

    
}