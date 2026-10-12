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
    "TEXTO"=> "ejer5"
    ]
];

$vector = array();
$vector[1] = "esto es una cadena";
$vector["posi1"] = 25.67;
$vector[] = false;
$vector["ultima"] = array(2,5,96);
$vector[56] = 23;


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 5", $barra);
cuerpo($vector);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo(array $vector){
    ?>
        <br><br>
        
    <?php

    foreach($vector as $elem => $valor){
        if(gettype($valor) == "array"){
            echo "posicion {$elem} contenido array:<br>";
            foreach ($valor as $i) {
                echo "$i <br>";
            }
        }elseif(gettype($valor) == "integer"){
            echo "Posición {$elem} con contenido Entero con valor {$valor}, en binario ". decbin($valor) ."<br>";
        }elseif(gettype($valor) == "double" || gettype($valor) == "float"){
            echo "Posición {$elem} con contenido Real con valor {$valor}, que al cuadrado es ". pow($valor, 2) ."<br>";
        }elseif(gettype($valor) == "string"){
            echo "Posición {$elem} con contenido String con valor -{$valor}- <br>";
        }elseif(gettype($valor) == "boolean"){
            if($valor == true){
                echo "Posición {$elem} con contenido Boolean con valor {$valor} y su opuesto False <br>";
            }else{
                echo "Posición {$elem} con contenido Boolean con valor {$valor} y su opuesto True <br>";
            }
        }

    }

}