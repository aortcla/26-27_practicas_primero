<?php

function mostrarErrores(
    array $errores,
    string $etiqueta = "div",
    string $clase = "error"
): string {
    $cadena = "";

    if ($errores) {
        
        $cadena .= "<$etiqueta class=\"$clase\">";

        foreach ($errores  as $campo => $erroresCampo)
            foreach ($erroresCampo as $err) {
                
                $cadena .= "$campo => $err <br>" . PHP_EOL;
            }

        
        $cadena .= "</$etiqueta >";
    }
    return $cadena;
}


function mostrarErroresLinea(
    string $campo,
    array $errores,
    string $etiqueta = "span",
    bool $unaSolaEtiqueta = false,
    string $clase = "error"
): string {
    $cadena = "";

    if (isset($errores[$campo]) && $errores[$campo]) {

        if ($unaSolaEtiqueta)
            $cadena .= "<$etiqueta class=\"$clase\">";

        foreach ($errores[$campo]  as $err) {
            if (!$unaSolaEtiqueta)
                $cadena .= "<$etiqueta class=\"$clase\">";

            $cadena .= $err;

            if (!$unaSolaEtiqueta)
                $cadena .= "</$etiqueta >";
        }

        if ($unaSolaEtiqueta)
            $cadena .= "</$etiqueta >";
    }
    return $cadena;
}


function escrituraFichero(string $nombre, ?array $datos = null): bool
{
    $rutaBase = RUTABASE . "/ficheros";

    if (!file_exists($rutaBase))
        mkdir($rutaBase);

    $rutaBase .= "/$nombre";

    if (!isset($datos))
        return false;

    $fiAbierto = fopen($rutaBase, "w");

    if (!$fiAbierto)
        return false;

    foreach ($datos as $fila)
    {
        $linea = "";
        foreach ($fila as $col)
        {
            if ($col == $fila[count($fila) - 1])
                $linea .= "$col";
            else
                $linea .= "$col;";
        }
        $linea .= "\r\n";

        fputs($fiAbierto, $linea);
    }

    fclose($fiAbierto);
    return true;
}

function lecturaFichero(string $nombre, ?array &$datos = null): bool
{
    $rutaBase = RUTABASE . "/ficheros";

    if (!file_exists($rutaBase))
        mkdir($rutaBase);

    $rutaBase .= "/$nombre";

    if (!isset($datos))
        return false;

    if(!file_exists($rutaBase))
        return false;


    $fiAbierto = fopen($rutaBase, "r");

    foreach ($datos as $pos => $val) {
        unset($datos[$pos]);
    }

    while ($linea = fgets($fiAbierto))
    {
        $linea = str_replace("\r", "", $linea);
        $linea = str_replace("\n", "", $linea);

        if ($linea != "")
        {
            $linea = explode(";", $linea);
            $datos[] = $linea;
        }
    }

    fclose($fiAbierto);
    return true;
}

function obtenerIpNavegador(): string
{
    $dirIp = str_replace(".", "_", $_SERVER['REMOTE_ADDR']);
    $navegador = "otro";
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (mb_stripos($userAgent, 'Edg'))
        $navegador = "edge";

    if (mb_stripos($userAgent, 'Opr') || mb_stripos($userAgent, 'OPR'))
        $navegador = "opera";

    if (mb_stripos($userAgent, 'Chrome'))
        $navegador = "chrome";

    if (mb_stripos($userAgent, 'Firefox'))
        $navegador = "firefox";

    if (mb_stripos($userAgent, 'Safari'))
        $navegador = "safari";


    return $dirIp."_".$navegador;
}