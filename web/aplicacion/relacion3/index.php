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


//variables para el ejercicio 4
$num1 = 7;

//variable para ejercicio 7
$vector = ["uno", "grande", "caminos", "a"];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACION 3", $barra);
cuerpo($array, $cont, $num1, $vector); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo(array $array, int $cont, int $num1, array $vector)
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
echo "Suma de 2 + 2: ".operaciones(1,2,2)."<br>".PHP_EOL;
echo "Suma de 2+2+2+2+2+2+2+2+2+2: ".operaciones(1,2,2,2,2,2,2,2,2,2,2)."<br>".PHP_EOL;
echo "Resta de 2 - 2: ".operaciones(2,2,2)."<br>".PHP_EOL;
echo "Multiplicacion de 2 x 2: ".operaciones(3,2,2)."<br>".PHP_EOL;

//Ejercicio 4
echo "<hr><h2>Ejercicio 4</h2><br>";
echo "Lo que devueve la funcion: ".devuelve($num1, 4, 5)."<br>".PHP_EOL;
echo "Valor de la primera variable: ".$num1."<br><br>".PHP_EOL;

echo "Lo que devueve la funcion: ".devuelve($num1)."<br>".PHP_EOL;
echo "Valor de la primera variable: ".$num1."<br><br>".PHP_EOL;

echo "Lo que devueve la funcion: ".devuelve($num1, 5)."<br>".PHP_EOL;
echo "Valor de la primera variable: ".$num1."<br><br>".PHP_EOL;

echo "Lo que devueve la funcion: ".devuelve(num1: $num1, num3: 7)."<br>".PHP_EOL;
echo "Valor de la primera variable: ".$num1."<br><br>".PHP_EOL;

//Ejercicio 5
echo "<hr><h2>Ejercicio 5</h2><br>";
echo "Suma de 2 + 2: ".hacerOperacion("suma", 2, 2)."<br>".PHP_EOL;
echo "Resta de 2 - 2: ".hacerOperacion("resta", 2, 2)."<br>".PHP_EOL;
echo "Multiplicacion de 2 x 2: ".hacerOperacion("multiplicacion", 2, 2)."<br>".PHP_EOL;
echo "Prueba de error: ".hacerOperacion("hola", 2, 2)."<br>".PHP_EOL;

//Ejercicio 6
echo "<hr><h2>Ejercicio 6</h2><br>";
echo "5 + 5: ". llamadaAfuncion(5,5,fn($num1, $num2) => $num1+ $num2)."<br>".PHP_EOL;
echo "5 - 2: ". llamadaAfuncion(5,2,fn($num1, $num2) => $num1 - $num2)."<br>".PHP_EOL;
echo "5 * 5: ". llamadaAfuncion(5,5,fn($num1, $num2) => $num1 * $num2)."<br>".PHP_EOL;

//Ejercicio 7
echo "<hr><h2>Ejercicio 7</h2><br>";
echo "Vector sin ordenar: <br>".PHP_EOL;
foreach ($vector as $elem) {
    echo $elem." ";
}

ordernar($vector);

echo "<br><br>Vector ordenado: <br>".PHP_EOL;
foreach ($vector as $elem) {
    echo $elem." ";
}


}