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
    "TEXTO"=> "ejer3"
    ]
];

 $array1 = [];

 $array2 = array(
        1 => 1,
        16 => 16,
        54 => 54,
        34,
        "uno" => "cadena",
        "dos" => true,
        "tres" => 1.345,
        "ultima" => ["cadena", true, 1.345]
    );

$array3=[
        1=>34,
        16=>"hola",
        54=>true,
        34,
        "uno"=>"cadena",
        "dos"=>true,
        "tres"=>1.345,
        "ultima"=>[1,34,"nueva"]
    ];


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 3", $barra);
cuerpo($array1, $array2, $array3);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo($array1, $array2, $array3){
    ?>
        <br><br>
        
    <?php

    // Hacer lo anterior creando y rellenando el array usando varias sentencias.  

    $array1[1] = 1;
    $array1[16] = 16;
    $array1[54] = 54;

    $array1[] = 34;

    $array1["uno"] = "cadena";
    $array1["dos"] = true;
    $array1["tres"] = 1.345;

    $array1["ultima"] = ["cadena", true, 1.345];

    //Recorrer los tres arrays usando foreach mostrando todos los valores de los arrays creados 
    echo "Recorrer el array 1: <br><br>";

    foreach($array1 as $elem => $valor){
        if(!is_array($valor)){
            echo "Elemento del array 1 con inidce ". $elem ." y con valor ".$valor."<br>";
        }else{
            echo "El elemento {$elem} es un array con valores: <br>";
            foreach($valor as $indice => $valor2){
                echo "Elemento {$indice} tiene valor: {$valor2}<br>";
            }
        }
    }

    //recorrer el segundo array
     echo "<br><br>Recorrer el array 2: <br><br>";

    foreach($array2 as $elem => $valor){
        if(!is_array($valor)){
            echo "Elemento del array 1 con inidce ". $elem ." y con valor ".$valor."<br>";
        }else{
            echo "El elemento {$elem} es un array con valores: <br>";
            foreach($valor as $indice => $valor2){
                echo "Elemento {$indice} tiene valor: {$valor2}<br>";
            }
        }
    }

    //recorrer el tercer array
     echo "<br><br>Recorrer el array 3: <br><br>";

    foreach($array3 as $elem => $valor){
        if(!is_array($valor)){
            echo "Elemento del array 1 con inidce ". $elem ." y con valor ".$valor."<br>";
        }else{
            echo "El elemento {$elem} es un array con valores: <br>";
            foreach($valor as $indice => $valor2){
                echo "Elemento {$indice} tiene valor: {$valor2}<br>";
            }
        }
    }
    
}