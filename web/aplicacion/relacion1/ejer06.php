<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 1",
    "ENLACE"=> "/aplicacion/relacion1/index.php"
    ],
    [
    "TEXTO"=> "ejer6"
    ]
];

$vector = array(
    "primera" => 12.56,
    24 => true,
    67 => 23.76
);


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 6", $barra);
cuerpo($vector);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo(array $vector){
    ?>
        <br><br>
        
    <?php

    

}