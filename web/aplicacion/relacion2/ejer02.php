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
    "TEXTO"=> "ejer2"
    ],
];

$cadena = "Está la niña en casa";

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 2", $barra);
cuerpo($cadena);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo(string $cadena){
    ?>
        <br><br>
        
    <?php

    /* No valido con []
    for($i = 0; $i < strlen($cadena); $i++){
        echo str_repeat('&nbsp', $i). $cadena[$i]."<br>";
    } */

   /*  No valido con substr
    for($i = 0; $i < strlen($cadena); $i++){
        echo str_repeat('&nbsp', $i) . substr($cadena, $i, 1)."<br>";
    } */

    for($i = 0; $i < strlen($cadena); $i++){
        echo str_repeat('&nbsp', $i) . mb_substr($cadena, $i, 1)."<br>";
    }
    
    $cont = 0;
    for($i = strlen($cadena); $i >= 0; $i--){
        if($i % 2 == 0){
            echo str_repeat('&nbsp',$cont) . mb_strtoupper( mb_substr($cadena, $i, 1)). "<br>";
        }else{
            echo str_repeat('&nbsp',$cont) . mb_substr($cadena, $i, 1). "<br>";
        }
        $cont++;
    }

    $cadenaDividida = explode('a', $cadena);
    for($i = 0; $i < count($cadenaDividida); $i++){
        echo $cadenaDividida[$i]."<br>";
    }

    $pos   = mb_strpos($cadena, 'niña') + mb_strlen('niña');
    $nueva = mb_substr($cadena, 0, $pos) . '/mujer ' . mb_substr($cadena, $pos + 1);
    echo $nueva;

}