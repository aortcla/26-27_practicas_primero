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

    

    
}