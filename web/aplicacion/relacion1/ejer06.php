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
    "TEXTO"=> "ejer6"
    ]
];

$vector = array(
    "primera" => 12.56,
    24 => true,
    67 => 23.76
);


//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("EJERCICIO 6", $barra);
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

     echo "<h3>Recorrido usando funciones de cursor</h3>";
    //pongo el puntero a la primera posicion
    reset($vector);
    while(key($vector) != NULL) 
        {
            //obtener clave y valor
            echo "Posición: " . key($vector) . " -> " . current($vector)."<br>";
            //incrementar posicion
            next($vector);
        }

   
    echo "<h3>Usando array_keys y array_values</h3>".PHP_EOL;
    
    $claves=array_keys($vector);
    $valores=array_values($vector);

    for ($cont=0;$cont<count ($claves);$cont++)
    {
        echo "Posición:  $claves[$cont] -> {$valores[$cont]} <br>".PHP_EOL;
        
    }

}