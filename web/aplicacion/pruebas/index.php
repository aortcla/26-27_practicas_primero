<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
//dibuja la plantilla de la vista
inicioCabecera("APLICACION  TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("PRUEBAS");
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