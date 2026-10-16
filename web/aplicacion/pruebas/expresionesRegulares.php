<?php 
include_once(dirname(__FILE__) . "/../../cabecera.php"); 
//controlador 
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"
    ],
    [
    "TEXTO"=> "pruebas",
    "ENLACE" => "/aplicacion/pruebas/index.php"
    ],
    [
    "TEXTO"=> "Expresiones regulares"
    ]
];

//dibuja la plantilla de la vista 
inicioCabecera("APLICACION PRIMER TRIMESTRE"); 
cabecera(); 
finCabecera(); 
inicioCuerpo("Expresiones Regulares", $barra); 
cuerpo();  //llamo a la vista 
finCuerpo(); 
// ********************************************************** 
 
//vista 
function cabecera()  
{} 
 
//vista 
function cuerpo(){ 
?> 

<br><br>
    <?php
       
    $cadena = "tienes 25 años";

    //buscar años
    $exp = "/años/";
    $resultado = [];

    echo preg_match($exp, $cadena, $resultado, PREG_OFFSET_CAPTURE)."<br>";
 
    $exp = "/[0123456789]/";
    echo preg_match($exp, $cadena, $resultado, PREG_OFFSET_CAPTURE)."<br>";

    $exp = "/[0-9]/";
    echo preg_match($exp, $cadena, $resultado, PREG_OFFSET_CAPTURE)."<br>";

    $exp = "/[\d]/";
    echo preg_match($exp, $cadena, $resultado, PREG_OFFSET_CAPTURE)."<br>";
}