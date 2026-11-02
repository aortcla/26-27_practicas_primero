<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 4"
    ],
    [
    "TEXTO"=> "index"
    ],
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACION 4", $barra);
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

//prueba de instrumento de viento
$instrumentoViento = new InstrumentoViento("madera", 15);

echo "<h1>Prueba Instrumento de viento</h1>";
echo $instrumentoViento->__toString();
echo "<br> Sonido del instrumento de viento: ". $instrumentoViento->sonido();
echo "<br> Afinar el instrumento de viento: ". $instrumentoViento->afinar();

//prueba de Flauta

echo "<h1>Prueba de flauta</h1>";

$array = ["material" => "madera", "edad" => 15];

$flauta1 = Flauta::CrearDesdeArray($array);
$flauta2 = $flauta1->clonacion();

echo "<br>Metodo de fabricacion: ". $flauta1->metodoFabricacion();
echo "<br>Metodo reciclado: ". $flauta2->metodoReciclado();

//Prueba de Oersona
echo "<h1>Prueba de Persona</h1>";
$casos = EstadoCivil::casos();
$posicion = array_rand($casos);
$estadoAleatorio = $casos[$posicion];

$persona1 = Persona::registrarPersona("Angel", "27/09/2005", "ejemplo", "Antequera", $estadoAleatorio);
echo $persona1->__toString();

}