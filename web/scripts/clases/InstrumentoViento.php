<?php

/**
 * Clase que hereda de InstrumentoBase
 */
class InstrumentoViento extends InstrumentoBase{

    protected string $_material = "madera";

    public function __construct(string $material = "madera", int $edad = 15){
        parent::__construct("instrumento de viento", $edad);
        $this->_material = $material;
    }

    public function sonido(): string{
        return "Fuuuuuu";
    }
 
    /**
     * Método final: las clases derivadas no pueden redefinirlo
     */
    final public function afinar(): string {
        return "1. Calentar el instrumento soplando aire templado. " .
               "2. Ajustar las piezas del cuerpo hasta dar la nota de referencia. " .
               "3. Comprobar la nota con un afinador.";
    }

    public function __toString(): string{
        return parent::__toString()."Instrumento de material ".$this->_material;
    }

}