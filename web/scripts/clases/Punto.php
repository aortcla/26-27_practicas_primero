<?php

class Punto {

    public const COLORES = [
        "black" => ["nombre" => "negro", "rgb" => [0,0,0]],
        "red" => ["nombre" => "rojo", "rgb" => [255,0,0]],
        "green" => ["nombre" => "verde", "rgb" => [0,255,0]],
        "blue" => ["nombre" => "azul", "rgb" => [0,0,255]]
    ];

    public const GROSORES = [
        1 => "fino",
        2 => "medio",
        3 => "grueso"
    ];

    private int $_propX;
    private int $_propY;
    private string $_color;
    private int $_grosor;


    public function __construct(int $propX, int $propY, string $color, int $grosor){

        if(!$this->setPropX($propX)){
            throw new Exception("El valor para X no es valido");
        }

        if(!$this->setPropY($propY)){
            throw new Exception("El valor para Y no es valido");
        }

        if(!$this->setColor($color)){
            throw new Exception("El valor no es un color registrado");
        }

        if(!$this->setGrosor($grosor)){
            throw new Exception("El grosor no es válido");
        }

    }

    //getters
    public function getPropX(){
        return $this->_propX;
    }

    public function getPropY(){
        return $this->_propY;
    }

    public function getColor(){
        return $this->_color;
    }

    public function getGrosor(){
        return $this->_grosor;
    }


    //setters
    public function setPropX(int $valor) : bool{

        if($valor >= 0 && $valor <= 20000){
            $this->_propX = $valor;
            return true;
        }else{
            return false;
        }

    }

    public function setPropY(int $valor) : bool{

        if($valor >= 0 && $valor <= 20000){
            $this->_propY = $valor;
            return true;
        }else{
            return false;
        }

    }

    public function setColor(string $valor) : bool{
        if(isset(Punto::COLORES[$valor])){
            $this->_color = $valor;
            return true;
        }else{
            return false;
        }
    }

    public function setGrosor(int $valor) : bool{

        if(isset(Punto::GROSORES[$valor])){
            $this->_grosor = $valor;
            return true;
        }else{
            return false;
        }

    }

    //No se puede crear propiedades dinamicas
    public function __set(string $nombre, mixed $valor): void{
        throw new Exception('No existe la propiedad ' . $nombre);
    }

    public function __get(string $nombre): mixed{
        throw new Exception('No existe la propiedad ' . $nombre);
    }

    public function __isset(string $nombre): bool{
        return false;
    }

    public function __unset(string $nombre): void{
        throw new Exception('No existe la propiedad ' . $nombre);
    }

}
?>