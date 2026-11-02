<?php

class Flauta extends InstrumentoViento implements IFabricable{

    private function __construct($material = "madera", $edad = 15){
        parent::__construct($material, $edad);    
    }


    public static function CrearDesdeArray(array $datos): static
    {
        
        $material = "madera";
        $edad = 15;
 
        if (isset($datos["material"]))
            $material = $datos["material"];
 
        if (isset($datos["edad"]))
            $edad = $datos["edad"];
 
        return new static($material, $edad);
    }

     
    public function clonacion(): Flauta
    {
        return new Flauta($this->_material, 0);
    }

    //metodos implementados de la interefaz IFabricable
    public function metodoFabricacion():string{
        return "1. Seleccionar el material. " .
               "2. Dar forma al tubo. " .
               "3. Perforar los orificios y colocar la embocadura. " .
               "4. Pulir y barnizar.";
   }

   public function metodoReciclado():string{
        return "Llevar al punto limpio";
   }

}