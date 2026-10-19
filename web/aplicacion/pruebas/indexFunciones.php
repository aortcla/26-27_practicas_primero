<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

include("misFunciones.php");



//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "pruebas"
    ],
    [
    "TEXTO"=> "index funciones"
    ],
];

$numero = doble(50);

if($numero === false){
    $numero = 10;
}

if($numero = doble($numero)===false){
    exit;
}

//dibuja la plantilla de la vista
inicioCabecera("APLICACION  TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("PRUEBAS", $barra);
cuerpo($numero); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo(int $numero)
{
?> 

    <br><br>

<?php

echo "el doble del numero es ".$numero." el numero ".$numero." es el doble del otro";

}