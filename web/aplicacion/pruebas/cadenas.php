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
    "TEXTO"=> "cadenas"
    ]
];

//dibuja la plantilla de la vista 
inicioCabecera("APLICACION PRIMER TRIMESTRE"); 
cabecera(); 
finCabecera(); 
inicioCuerpo("Cadenas", $barra); 
cuerpo();  //llamo a la vista 
finCuerpo(); 
// ********************************************************** 
 
//vista 
function cabecera()  
{} 
 
//vista 
function cuerpo() 
{ 
?>

El ni�o me ha escrito una carta<br>
El ni&ntilde;o me ha escrito una carta<br>
Qu�  &lt;&gt bonita<br>
Qu&eacute; bonita
    <?php
       


    ?>
<?php 
 
}