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
    "TEXTO"=> "ejer4"
    ],
];

$num1 = 17.5;
$num2 = 379987.24;


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 4", $barra);
cuerpo($num1, $num2);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo(float $num1, float $num2){
    ?>
        <br><br>
        
    <?php

    $formato1 = number_format($num1, 1, ",", ".");
    $formato2 = number_format($num2, 2, ",", ".");

    echo $formato1."<br>";
    echo $formato2."<br>";

    echo "-".str_repeat('0', 15 - strlen($formato1)) . $formato1."-<br>";
    echo "-".str_repeat('&nbsp', 15 - strlen($formato2)) . $formato2."-<br>";
    
}