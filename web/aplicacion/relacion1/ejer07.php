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
    "TEXTO"=> "ejer7"
    ]
];


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 7", $barra);
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

    echo date("d/m/Y") . "<br>";
    echo "día " . date("d") . ", mes " . date("F") .
         ", año " . date("Y") . ", día de la semana " . date("l") . "<br>";
    echo date("H:i:s") . "<br><br>";

    //crear la fecha indicada en el enunciado 29/3/2024 a 12:45
    $miFecha = mktime(12, 45, 0, 3, 29, 2024);
    echo date("d/m/Y", $miFecha) . "<br>";
    echo "día " . date("d", $miFecha) . ", mes " . date("F", $miFecha) .
         ", año " . date("Y", $miFecha) . ", día de la semana " . date("l", $miFecha) . "<br>";
    echo date("H:i:s", $miFecha) . "<br><br>";

    $miFecha2 = strtotime("-12 days -4 hours");
    echo date("d/m/Y", $miFecha2) . "<br>";
    echo "día " . date("d", $miFecha2) . ", mes " . date("F", $miFecha2) .
         ", año " . date("Y", $miFecha2) . ", día de la semana " . date("l", $miFecha2) . "<br>";
    echo date("H:i:s", $miFecha2) . "<br><br>";

    //con la clase dateTime

    $fecha = new DateTime();
    echo $fecha->format("d/m/Y") . "<br>";
    echo "día " . $fecha->format("d") . ", mes " . $fecha->format("F") .
         ", año " . $fecha->format("Y") . ", día de la semana " . $fecha->format("l") . "<br>";
    echo $fecha->format("H:i:s") . "<br><br>";

    $fecha2 = DateTime::createFromFormat("d/m/Y H:i:s", "29/03/2024 12:45:00");
    echo $fecha2->format("d/m/Y") . "<br>";
    echo "día " . $fecha2->format("d") . ", mes " . $fecha2->format("F") .
         ", año " . $fecha2->format("Y") . ", día de la semana " . $fecha2->format("l") . "<br>";
    echo $fecha2->format("H:i:s") . "<br><br>";

    $fecha3 = new DateTime();
    
    //se le resta 12 dias y 4 horas
    $intervalo = new DateInterval("P12DT4H");
    $fecha3->sub($intervalo);
    echo $fecha3->format("d/m/Y") . "<br>";
    echo "día " . $fecha3->format("d") . ", mes " . $fecha3->format("F") .
         ", año " . $fecha3->format("Y") . ", día de la semana " . $fecha3->format("l") . "<br>";
    echo $fecha3->format("H:i:s") . "<br><br>";
}