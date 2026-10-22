<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

include("miLibreria.php");

//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 3"
    ],
    [
    "TEXTO"=> "index"
    ],
];

//variables para el ejercicio 1
$array = [];
$cont = 0;


//variables para el ejercicio 2

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACION 3", $barra);
cuerpo($array, $cont); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo(array $array, int $cont)
{
?>

<?php
//Ejercicio 1
echo "<hr><h2>Ejercicio 1</h2><br>".PHP_EOL;
echo cuentaVeces($array, "hola", 7, $cont)."<br>".PHP_EOL;
echo cuentaVeces($array, "2daw", 10, $cont)."<br>".PHP_EOL;
echo cuentaVeces($array, "adios", 5, $cont)."<br>".PHP_EOL;

//Ejercicio 2
echo "<hr><h2>Ejercicio 2</h2><br>".PHP_EOL;
echo "Numero de caracteres 20: ".generarCadena(20)."<br>".PHP_EOL;
echo "Numero de caracteres -5: ".generarCadena(-5)."<br>".PHP_EOL;
echo "Numero de caracteres por defecto : ".generarCadena()."<br>".PHP_EOL;


//Ejercicio 3
echo "<hr><h2>Ejercicio 3</h2><br>";
echo "Suma de 2 + 2: ".operaciones(1,2,2)."<br>";
echo "Suma de 2+2+2+2+2+2+2+2+2+2: ".operaciones(1,2,2,2,2,2,2,2,2,2,2)."<br>";
echo "Resta de 2 - 2: ".operaciones(2,2,2)."<br>";
echo "Multiplicacion de 2 x 2: ".operaciones(3,2,2)."<br>";

//Ejercicio 4
echo "<hr><h2>Ejercicio 4</h2><br>";

//Ejercicio 5
echo "<hr><h2>Ejercicio 5</h2><br>";

//Ejercicio 6
echo "<hr><h2>Ejercicio 6</h2><br>";

//Ejercicio 7
echo "<hr><h2>Ejercicio 7</h2><br>";

//Ejercicio 8
echo "<hr><h2>Ejercicio 8</h2><br>";



}