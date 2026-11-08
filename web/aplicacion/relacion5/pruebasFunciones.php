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
    ]
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

    <a href="./index.php">Volver a index</a>

<?php



// ==========================================
// PRUEBAS DE LA LIBRERÍA VALFILTER
// ==========================================
echo "<h1>Pruebas de funciones filter</h1><hr>";

// 1. Prueba de validaEntero
$enteroFilter = 15;
echo "<h2>validaEntero</h2>";
echo "Valor del entero antes de la funcion: {$enteroFilter}<br>";
\VALFILTER\validaEntero($enteroFilter, 0, 10, 10);
echo "Valor del entero despues de la funcion: {$enteroFilter}<br><hr>";

// 2. Prueba de validaReal
$realFilter = 15.5;
echo "<h2>validaReal</h2>";
echo "Valor del real antes de la funcion: {$realFilter}<br>";
\VALFILTER\validaReal($realFilter, 1.0, 10.0, 5.0);
echo "Valor del real despues de la funcion: {$realFilter}<br><hr>";

// 3. Prueba de validaFecha
$fechaFilter = "31/02/2026";
echo "<h2>validaFecha</h2>";
echo "Valor de la fecha antes de la funcion: {$fechaFilter}<br>";
\VALFILTER\validaFecha($fechaFilter, "01/01/2026");
echo "Valor de la fecha despues de la funcion: {$fechaFilter}<br><hr>";

// 4. Prueba de validaHora
$horaFilter = "25:70:70";
echo "<h2>validaHora</h2>";
echo "Valor de la hora antes de la funcion: {$horaFilter}<br>";
\VALFILTER\validaHora($horaFilter, "00:00:00");
echo "Valor de la hora despues de la funcion: {$horaFilter}<br><hr>";

// 5. Prueba de validaEmail
$emailFilter = "correo-no-valido";
echo "<h2>validaEmail</h2>";
echo "Valor del email antes de la funcion: {$emailFilter}<br>";
\VALFILTER\validaEmail($emailFilter, "defecto@email.com");
echo "Valor del email despues de la funcion: {$emailFilter}<br><hr>";

// 6. Prueba de validaCadena
$cadenaFilter = "Hola mundo muy largo";
echo "<h2>validaCadena</h2>";
echo "Valor de la cadena antes de la funcion: {$cadenaFilter}<br>";
\VALFILTER\validaCadena($cadenaFilter, 5, "Corto");
echo "Valor de la cadena despues de la funcion: {$cadenaFilter}<br><hr>";

// 7. Prueba de validaExpresion
$expFilter = "ABC-123";
echo "<h2>validaExpresion</h2>";
echo "Valor de la expresion antes de la funcion: {$expFilter}<br>";
\VALFILTER\validaExpresion($expFilter, '/^[A-Z]{3}-\d{3}$/', "DEF-999");
echo "Valor de la expresion despues de la funcion: {$expFilter}<br><hr>";

// 8. Prueba de validaRango
$rangoFilter = "rojo";
$coloresFilter = ["rojo" => 1, "verde" => 2];
echo "<h2>validaRango</h2>";
echo "Valor de rango antes de la funcion: {$rangoFilter}<br>";
\VALFILTER\validaRango($rangoFilter, $coloresFilter, 2);
echo "Valor de rango despues de la funcion: {$rangoFilter}<br><hr>";



// ==========================================
// PRUEBAS DE LA LIBRERÍA VALNORMAL
// ==========================================
echo "<h1>Pruebas de funciones normales</h1><hr>";

// 1. Prueba de validaEntero
$enteroNormal = 15;
echo "<h2>validaEntero</h2>";
echo "Valor del entero antes de la funcion: {$enteroNormal}<br>";
\VALNORMAL\validaEntero($enteroNormal, 0, 10, 10);
echo "Valor del entero despues de la funcion: {$enteroNormal}<br><hr>";

// 2. Prueba de validaReal
$realNormal = 15.5;
echo "<h2>validaReal</h2>";
echo "Valor del real antes de la funcion: {$realNormal}<br>";
\VALNORMAL\validaReal($realNormal, 1.0, 10.0, 5.0);
echo "Valor del real despues de la funcion: {$realNormal}<br><hr>";

// 3. Prueba de validaFecha
$fechaNormal = "31/02/2026";
echo "<h2>validaFecha</h2>";
echo "Valor de la fecha antes de la funcion: {$fechaNormal}<br>";
\VALNORMAL\validaFecha($fechaNormal, "01/01/2026");
echo "Valor de la fecha despues de la funcion: {$fechaNormal}<br><hr>";

// 4. Prueba de validaHora
$horaNormal = "25:70:70";
echo "<h2>validaHora</h2>";
echo "Valor de la hora antes de la funcion: {$horaNormal}<br>";
\VALNORMAL\validaHora($horaNormal, "00:00:00");
echo "Valor de la hora despues de la funcion: {$horaNormal}<br><hr>";

// 5. Prueba de validaEmail
$emailNormal = "correo-no-valido";
echo "<h2>validaEmail</h2>";
echo "Valor del email antes de la funcion: {$emailNormal}<br>";
\VALNORMAL\validaEmail($emailNormal, "defecto@email.com");
echo "Valor del email despues de la funcion: {$emailNormal}<br><hr>";

// 6. Prueba de validaCadena
$cadenaNormal = "Hola mundo muy largo";
echo "<h2>validaCadena</h2>";
echo "Valor de la cadena antes de la funcion: {$cadenaNormal}<br>";
\VALNORMAL\validaCadena($cadenaNormal, 5, "Corto");
echo "Valor de la cadena despues de la funcion: {$cadenaNormal}<br><hr>";

// 7. Prueba de validaExpresion
$expNormal = "ABC-123";
echo "<h2>validaExpresion</h2>";
echo "Valor de la expresion antes de la funcion: {$expNormal}<br>";
\VALNORMAL\validaExpresion($expNormal, '/^[A-Z]{3}-\d{3}$/', "DEF-999");
echo "Valor de la expresion despues de la funcion: {$expNormal}<br><hr>";

// 8. Prueba de validaRango
$rangoNormal = "rojo";
$coloresNormal = ["rojo" => 1, "verde" => 2];
echo "<h2>validaRango</h2>";
echo "Valor de rango antes de la funcion: {$rangoNormal}<br>";
\VALNORMAL\validaRango($rangoNormal, $coloresNormal, 2);
echo "Valor de rango despues de la funcion: {$rangoNormal}<br><hr>";

}