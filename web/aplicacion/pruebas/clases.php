<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

include("misFunciones.php");



//controlador
$barra = [
    [
        "TEXTO" => "inicio",
        "ENLACE" => "/index.php"
    ],
    [
        "TEXTO" => "pruebas"
    ],
    [
        "TEXTO" => "clases"
    ],
];

$ins = new Instituto();

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

<?php




}
