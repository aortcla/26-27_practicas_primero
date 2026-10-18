<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 2",
    "ENLACE"=> "/aplicacion/relacion2/index.php"
    ],
    [
    "TEXTO"=> "ejer5"
    ],
];

$cadena = <<<fin
    Hola , cadena hecha en heredoc con etiquetas html como: <p></p> o <h1></h1>\n
    También hay numeros de diferentes cifras 1, 234, 77.252\n
    Y tambien direccion de correo electronico correo1@gmail.com
fin;

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 5", $barra);
cuerpo($cadena);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera(){
    ?>
    <!-- esto va en el head -->
    <?php


}

//vista
function cuerpo(string $cadena){
    ?>
        <br><br>
        
    <?php

    $resultado = [];

    //para poder mostrar la cadena tengo que sustituir los \n que tengo en lla cadena por etiquetas
    //<br> para que se interpreten y no las muestre y haga los saltos de linea, y tambien tengo que sustituir
    //como minimo la "<" por &lt para que no  lo interprete como etiqueta y lo muestre
    echo str_replace("\n", "<br>", str_replace('<', '&lt;', $cadena))."<br><br>";

    // buscar etiqueta
    $exp = "/<[^>]+>/";
    preg_match($exp, $cadena, $resultado, PREG_OFFSET_CAPTURE);
    //para poder mostrar el etiqueta tengo que hacer replace
    echo "Etiqueta " . str_replace('<', '&lt;', $resultado[0][0]) . "<br>";
    //aqui muestro la posicion donde se ha encontrado
    echo "Etiqueta en la posición " . $resultado[0][1] . "<br><br>";

    // buscar número
    $exp = "/[0-9]+/";
    preg_match($exp, $cadena, $resultado, PREG_OFFSET_CAPTURE);
    echo "Numero " . $resultado[0][0] . "<br>";
    echo "Número en la posición " . $resultado[0][1] . "<br><br>";

    // buscar email
    $exp = "/[a-z0-9]+@[a-z]+\.[a-z]{2,}/";
    preg_match($exp, $cadena, $resultado, PREG_OFFSET_CAPTURE);
    echo "Email " . $resultado[0][0] . "<br>";
    echo "Email en la posición " . $resultado[0][1] . "<br>";

}