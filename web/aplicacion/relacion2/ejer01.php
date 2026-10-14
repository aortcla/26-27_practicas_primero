<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 2",
    "ENLACE"=> "/aplicacion/relacion1/index.php"
    ],
    [
    "TEXTO"=> "ejer1"
    ],
];

$var = 5;

$heredoc = <<<fin
    {$var} Probando echo con HEREDOC ', &ltp&gthola&lt/p&gt  á, é, ñ<br>
fin;

$nowdoc = <<<'fin'
    Probando echo con {NOWDOC} \', &ltp&gthola&lt/p&gt  á, é, ñ<br>
fin;

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 1", $barra);
cuerpo($var, $heredoc, $nowdoc);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo(int $var, string $heredoc, string $nowdoc){
    ?>
        <br><br>
        
    <?php

    
    echo $var.' Probando echo con {\'\'} \', &ltp&gthola&lt/p&gt  á, é, ñ<br>'.PHP_EOL;

    echo "{$var} Probando echo con {\"\"} ', &ltp&gthola&lt/p&gt  á, é, ñ<br>".PHP_EOL;

    echo $heredoc .PHP_EOL;

    echo $var . $nowdoc .PHP_EOL;

    
}