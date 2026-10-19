<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "pruebas"
    ],
    [
    "TEXTO"=> "index"
    ],
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION  TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("PRUEBAS", $barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>  
    <br><br>
    <a href="basicas.php">1- Funcionamiento básico</a><br>
    <a href="array.php">2- Arrays</a><br>
    <a href="pasopar.php">3- Comunicacion controlador-vista</a><br>
    <a href="cadenas.php">4- Cadenas</a><br>
    <a href="expresionesRegulares.php">5- Expresiones regulares</a><br>
    <a href="indexFunciones.php">6- Funciones</a>

<?php
}