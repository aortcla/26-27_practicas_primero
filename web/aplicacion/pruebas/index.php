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
    Elemento de pruebas
    <br><br>
    <a href="basicas.php">Funcionamiento básico</a><br>
    <a href="array.php">Arrays</a><br>
    <a href="pasopar.php">Comunicacion controlador-vista</a>

<?php
}