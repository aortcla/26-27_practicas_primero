<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 1");
cuerpo();  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo(){
    ?>
        <br><br>
        
    <?php

    $var = 10.5;
    $varEntero = 10;


    //funciones que pide el ejercicio
    echo $var." numero inicial<br>";
    echo "Math round: ".round($var)."<br>";
    echo "Math floor: ".floor($var)."<br>";
    echo "Math pow: ".pow($var, 2)."<br>";
    echo "Math sqrt: ".sqrt($var)."<br>";
    echo "Math dechex (de entero a hexadecimal): ".dechex($varEntero)."<br>";
    echo "Math base 4 a base 8 del numero 321: ". base_convert("321", 4, 8) ."<br>";

    //funciones diferentes al ejercicio
    echo "Math exp: ". exp($var) ."<br>";
    echo "Math abs: ". abs($var) ."<br>";


    //binario, octal y hexadecimal
    $numBinario = 0b100011; //numero binario
    $numOctal = 03241; //numero octal
    $numHexa = 0x10A;  //numero hexadecimal

    echo "numero binario: ". $numBinario ."<br>";
    echo "numero Octal: ". $numOctal ."<br>";
    echo "numero hexadecimal: ". $numHexa ."<br>";
}