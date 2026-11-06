<?php
require_once("val_filter.php");
require_once("val_normal.php");

include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 5"
    ],
    [
    "TEXTO"=> "pruebas funciones"
    ],
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACION 5", $barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>

<?php

    $entero = 15;

    echo "<h1>Prueba de Filters</h1><hr>";
    echo "Valor del entero antes de la funcion: {$entero}<br>";
    \VALFILTER\validaEntero($entero, 0, 10, 10);
    echo "Valor del entero despues de la funcion: {$entero}<br><hr>";

    


    echo "<h1>Preba de Normal</h1><hr>";
    echo "Valor del entero antes de la funcion: {$entero}<br>";
    \VALNORMAL\validaEntero($entero, 0, 5, 3);
    echo "Valor del entero despues de la funcion: {$entero}<br><hr>";

}