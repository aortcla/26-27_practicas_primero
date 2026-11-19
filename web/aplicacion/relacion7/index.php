<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador
$barra=[
    [
    "TEXTO"=> "inicio",
    "ENLACE"=> "/index.php"],
    [
    "TEXTO"=> "Relacion 7"
    ],
    [
    "TEXTO"=> "index"
    ],
];

$punto = null;

$errores = [];

$datos = [
        "x" => $_POST["inCoorX"],
        "y" => $_POST["inCoorY"],
        "color" => $_POST["colores"],
        "grosor" => $_POST["grosor"]
    ];



//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACION 7",$barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>

<form action="#" method="post">

    Coordenada X: <input type="number" name="inCoorX"><br>
    Coordenada Y: <input type="number" name="inCoorY"><br>

    Seleccione el color del punto: 
    <select name="colores" id="colores">
        <?php
            foreach (Punto::COLORES as $key => $value) {
                echo "<option value='$key'>".mb_strtoupper($value["nombre"])."</option>";
            }
        ?>
    </select>

    <br>Seleccione un grosor: 
    <?php
        foreach (Punto::GROSORES as $key => $value) {
            echo "<input type='radio' name='grosor' value='$key'>". mb_strtoupper($value) ."</input>";
        }
    ?>

    <br>
    <input type="submit" value="Guardar" name="guardar">

</form>

<?php

}
?>