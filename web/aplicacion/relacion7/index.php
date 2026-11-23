<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

$barra = [
    [
        "TEXTO" => "inicio",
        "ENLACE" => "/index.php"
    ],
    [
        "TEXTO" => "Relacion 7"
    ],
    [
        "TEXTO" => "index"
    ],
];

$punto = null;
$errores = [];
$nombreArchivo = "imagen_" . obtenerIpNavegador();
$rutaFichero = RUTABASE . "/ficheros/$nombreArchivo.dat";
$rutaImagen = RUTABASE . "/imagenes/puntos/$nombreArchivo.jpg";
$actualizarImg = false;

if (!isset($puntos) || !is_array($puntos)) {
    $puntos = [];
}

if (empty($puntos) && file_exists($rutaFichero)) {
    $lineasGuardadas = file($rutaFichero, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (is_array($lineasGuardadas)) {
        foreach ($lineasGuardadas as $linea) {
            $campos = explode(";", $linea);
            if (count($campos) === 4) {
                $x = intval(trim($campos[0]));
                $y = intval(trim($campos[1]));
                $color = trim($campos[2]);
                $grosor = parsearGrosor(trim($campos[3]));

                try {
                    $puntos[] = new Punto($x, $y, $color, $grosor);
                } catch (Exception $e) {
                    $errores["fichero"][] = $e->getMessage();
                }
            }
        }
    }
}

if (isset($_POST["subir"]) && isset($_FILES["ficheroPuntos"])) {
    $file = $_FILES["ficheroPuntos"];

    if ($file["error"] === UPLOAD_ERR_OK && mime_content_type($file["tmp_name"]) === "text/plain") {
        $lineas = file($file["tmp_name"], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (!file_exists($rutaFichero)) {
            resetPuntos($puntos);
        }

        foreach ($lineas as $linea) {
            $campos = explode(";", $linea);

            if (count($campos) === 4) {
                $x = intval(trim($campos[0]));
                $y = intval(trim($campos[1]));
                $color = trim($campos[2]);
                $grosor = parsearGrosor(trim($campos[3]));

                try {
                    $puntos[] = new Punto($x, $y, $color, $grosor);
                } catch (Exception $e) {
                    $errores["subir"][] = $e->getMessage();
                }
            }
        }

        $datosPunto = extraerDatosPuntos($puntos);
        escrituraFichero("$nombreArchivo.dat", $datosPunto);
        $actualizarImg = true;
    }
}

if (isset($_POST["borrar"]) && isset($_POST["borrarPunto"])) {
    unset($puntos[intval($_POST["borrarPunto"])]);
    $puntos = array_values($puntos);

    $datosPunto = extraerDatosPuntos($puntos);
    escrituraFichero("$nombreArchivo.dat", $datosPunto);
    $actualizarImg = true;
}

$datos = [
    "x" => $_POST["inCoorX"] ?? 0,
    "y" => $_POST["inCoorY"] ?? 0,
    "color" => $_POST["colores"] ?? "black",
    "grosor" => isset($_POST["grosor"]) ? intval($_POST["grosor"]) : 2
];

if (isset($_POST["guardar"])) {
    $datos["x"] = intval($_POST["inCoorX"] ?? 0);
    $datos["y"] = intval($_POST["inCoorY"] ?? 0);
    $datos["color"] = $_POST["colores"] ?? "";
    $datos["grosor"] = isset($_POST["grosor"]) ? intval($_POST["grosor"]) : 0;

    if (!validaEntero($datos["x"], 0, 500, $datos["x"])) {
        $errores["x"][] = "La coordenada X debe estar entre 0 y 500";
    }

    if (!validaEntero($datos["y"], 0, 500, $datos["y"])) {
        $errores["y"][] = "La coordenada Y debe estar entre 0 y 500";
    }

    if ($datos["color"] === "" || !key_exists($datos["color"], Punto::COLORES)) {
        $errores["color"][] = "El color no está entre los indicados";
    }

    if (!key_exists($datos["grosor"], Punto::GROSORES)) {
        $errores["grosor"][] = "El grosor no está entre los indicados";
    }

    if (empty($errores)) {
        $datosPunto = extraerDatosPuntos($puntos);
        $datosPunto[] = [$datos["x"], $datos["y"], $datos["color"], $datos["grosor"]];

        resetPuntos($puntos);
        escrituraFichero("$nombreArchivo.dat", $datosPunto);

        foreach ($datosPunto as $p) {
            $puntos[] = new Punto(intval($p[0]), intval($p[1]), (string)$p[2], intval($p[3]));
        }

        $datos = [
            "x" => 0,
            "y" => 0,
            "color" => "black",
            "grosor" => 2
        ];
        $actualizarImg = true;
    }
}

$imagen = imagecreatetruecolor(501, 501);

$blanco = imagecolorallocate($imagen, 255, 255, 255);
imagefill($imagen, 0, 0, $blanco);

$negro = imagecolorallocate($imagen, 0, 0, 0);
imagerectangle($imagen, 0, 0, 500, 500, $negro);

foreach ($puntos as $p) {
    $rgb = Punto::COLORES[$p->getColor()]["rgb"];
    $color = imagecolorallocate($imagen, $rgb[0], $rgb[1], $rgb[2]);
    imagefilledellipse($imagen, $p->getPropX(), $p->getPropY(), $p->getGrosor() * 4, $p->getGrosor() * 5, $color);
}

if (!file_exists($rutaFichero)) {
    $actualizarImg = true;
}

if ($actualizarImg) {
    imagejpeg($imagen, $rutaImagen);
}

if (file_exists($rutaImagen)) {
    $rutaEtiquetaImg = "/imagenes/puntos/$nombreArchivo.jpg?v=" . filemtime($rutaImagen);
} else {
    $rutaEtiquetaImg = "/imagenes/puntos/$nombreArchivo.jpg";
}

inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("RELACION 7", $barra);
cuerpo($datos, $errores, $puntos, $rutaEtiquetaImg);
finCuerpo();

function cabecera() {}

function cuerpo(array $datos, array $errores, array $puntos, string $rutaEtiquetaImg)
{
?>

<form action="#" method="post">

    Coordenada X: <input type="number" name="inCoorX" value="<?php echo $datos["x"]; ?>">
    <?php echo mostrarErroresLinea("x", $errores, "span", true); ?><br>

    Coordenada Y: <input type="number" name="inCoorY" value="<?php echo $datos["y"]; ?>">
    <?php echo mostrarErroresLinea("y", $errores, "span", true); ?><br>

    Seleccione el color del punto:
    <?php echo mostrarErroresLinea("color", $errores, "span", true); ?>
    <select name="colores" id="colores">
        <?php
        foreach (Punto::COLORES as $key => $value) {
            echo "<option value='$key' " . (($key === $datos["color"]) ? "selected" : "") . ">" . mb_strtoupper($value["nombre"]) . "</option>";
        }
        ?>
    </select>

    <br>Seleccione un grosor:
    <?php echo mostrarErroresLinea("grosor", $errores, "span", true); ?>
    <?php
    foreach (Punto::GROSORES as $key => $value) {
        echo "<input type='radio' name='grosor' value='$key' " . (($datos["grosor"] === $key) ? "checked" : "") . ">" . mb_strtoupper($value) . "</input>";
    }
    ?>

    <br>
    <input type="submit" value="Guardar" name="guardar">

    <hr>
    <select name="borrarPunto">
        <?php
        foreach ($puntos as $cla => $val) {
            echo "<option value='" . $cla . "'>(" . strval($val->getPropX()) . "X, " . strval($val->getPropY()) . "Y) >> " . mb_strtoupper(Punto::COLORES[$val->getColor()]["nombre"]) . " - " . mb_strtoupper(Punto::GROSORES[$val->getGrosor()]) . "</option>" . PHP_EOL;
        }
        ?>
    </select>
    <br><br>
    <input type="submit" name="borrar" value="Borrar">

</form>

<hr>
<form action="#" method="post" enctype="multipart/form-data">
    <h3>Subir fichero de puntos</h3>
    <input type="file" name="ficheroPuntos" accept=".dat,.txt">
    <br><br>
    <input type="submit" name="subir" value="Subir">
</form>

<hr>
<textarea name="areaTexto" cols="75" rows="15"><?php
foreach ($puntos as $p) {
    echo "Coordenadas: (" . $p->getPropX() . "X, " . $p->getPropY() . "Y) >> Color: " . mb_strtoupper(Punto::COLORES[$p->getColor()]["nombre"]) . " - Grosor: " . mb_strtoupper(Punto::GROSORES[$p->getGrosor()]) . "\r\n";
}
?></textarea>
<br>
<img src="<?php echo $rutaEtiquetaImg; ?>" alt="Imagen puntos">
<br><br>
<a href="/aplicacion/relacion7/imagen.php">Descargar imagen</a>

<?php
}

function resetPuntos(array &$puntos): void
{
    foreach ($puntos as $key => $value) {
        unset($puntos[$key]);
    }
}

function extraerDatosPuntos(array $puntos): array
{
    $datosPunto = [];
    foreach ($puntos as $p) {
        $datosPunto[] = [$p->getPropX(), $p->getPropY(), $p->getColor(), $p->getGrosor()];
    }
    return $datosPunto;
}

function parsearGrosor(string $valor): int
{
    if (is_numeric($valor)) {
        return intval($valor);
    }

    $mapa = array_flip(array_map("mb_strtolower", Punto::GROSORES));
    $clave = mb_strtolower(trim($valor));

    return $mapa[$clave] ?? 0;
}
?>