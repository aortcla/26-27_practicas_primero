<?php 
include_once(dirname(__FILE__) . "/../../cabecera.php"); 
//controlador 
//dibuja la plantilla de la vista 
inicioCabecera("APLICACION PRIMER TRIMESTRE"); 
cabecera(); 
finCabecera(); 
inicioCuerpo("Pruebas basicas"); 
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
    <br><br>Esto es html 
    <?php
        echo "Esto es php"; //Esto es un comentario

        $var1 = 25;
        $cadena1 = 'esto es una cadena';

        $var1 += 12;
        echo $var1;

        $una_cadena="hola";
        $unaCadena="adios";

        $var1 -= 17;
        echo "$var1";

        $unaCadena = 45;
        echo $unaCadena;

        //isset significa que si la variable esta inicializada
        if(isset($cadena2))
            echo $cadena2;

        $real = 1234.56789012345678901;
        $real += 0.4321098765429;

        echo "el numero \$var1 es {$var1}<br>".PHP_EOL;
        echo 'el numero es $var1<br>'.PHP_EOL;

        $real = null;

        echo "el numero real es $real";

        $var = 125;
        $tipo = gettype($var);

        $var = (string)125;
        $tipo = gettype($var);

        $var = settype($var, "double");
        $tipo = gettype($var);

        $var = intval($var);
        $tipo = gettype($var);

        $var = "0";
        if("0000")
            $cadena = "var no vale false";

        $var = "0";
        if("")
            $cadena = "var no vale false";

        $var = 0;
        if($var)
            $cadena = "var no vale false";

        //referencia
        $var1 = 100;
        $var2 = $var1;
        $var3 = &$var1;
        $var2 = 150;
        $var3 = 200;
        

    ?>
<?php 
 
}