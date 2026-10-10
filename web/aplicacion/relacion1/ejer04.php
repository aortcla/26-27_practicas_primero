<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 1",
    "ENLACE"=> "/aplicacion/relacion1/index.php"
    ],
    [
    "TEXTO"=> "ejer4"
    ]
];

const FILAS = 9;
$array1 = [];
$array2 = [];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 4", $barra);
cuerpo($array1, $array2);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo(array $array1, array $array2){
    ?>
        <br><br>
        
    <?php

    //cargar primer array
    for($i = 1; $i <= 5; $i++){
        $array1[$i] = $i;
    }
    
    //mostrar el primer array
    foreach($array1 as $elem){
        for($i = 0; $i < $elem;$i++){
            echo $elem;
        }
        echo "<br>";    
    }

    echo "<br><br>";
    //cargar segundo array
    for($i = 0; $i <= FILAS; $i++){
        $array2[$i] = $i;
    }

    //mostrar el segundo array
    foreach($array2 as $elem){
        for($i = 0; $i < $elem; $i++){
            echo $elem;
        }
        echo "<br>";
    }
}