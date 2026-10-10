<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 1"
    ],
    [
    "TEXTO"=> "index"
    ],
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACION 1", $barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
    <a href="ejer01.php">Ejercicio 1</a><br>
    <a href="ejer02.php">Ejercicio 2</a><br>
    <a href="ejer03.php">Ejercicio 3</a><br>
    <a href="ejer04.php">Ejercicio 4</a><br>
    <a href="ejer05.php">Ejercicio 5</a><br>

<?php
}