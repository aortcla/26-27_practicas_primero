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
    "TEXTO"=> "ejer2"
    ]
];

const N = 1000;
$array_resultados = [];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 2", $barra);
cuerpo($array_resultados);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo($array_resultados){
    ?>
        <br><br>
        
    <?php

    //Simular el lanzamiento de un dado (6 veces) (usar un bucle for, mt_rand con parametros).
    echo "PRIMEROS 6 LANZAMIENTOS CON BUCLE FOR<br>";
    for($i = 0; $i < 6; $i++){
        echo "Lanzamiento ". ($i+1) ." del dado: ". mt_rand(1,6)."<br>";
    }

    echo "<br>LANZAMIENTOS DE N NUMEROS CON WHILE<br>";
    echo "Lanzado el dado ". N ." veces: <br>";
    $cont = 0;
    while($cont < N){
        $num_aleatorio = mt_rand(1,6);
        $array_resultados[$cont] = $num_aleatorio;
        $cont++;
    }

    $veces1 = 0;
    $veces2 = 0;
    $veces3 = 0;
    $veces4 = 0;
    $veces5 = 0;
    $veces6 = 0;
    for($i = 0; $i < count($array_resultados); $i++){
        switch($array_resultados[$i]){
            case 1: $veces1++; break;
            case 2: $veces2++; break;
            case 3: $veces3++; break;
            case 4: $veces4++; break;
            case 5: $veces5++; break;
            case 6: $veces6++; break;
        }
    }

    for($i = 1; $i < 7; $i++){
         echo "El ".$i." ha salido ". ${'veces' . $i} ." veces con un porcentaje de ". (${'veces' . $i} / N * 100). "%<br>";
    }

}