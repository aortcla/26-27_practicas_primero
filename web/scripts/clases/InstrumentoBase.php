<?php

abstract class InstrumentoBase{

    private string $_descripcion;
    protected int $_edad=10;

    protected static int $_siguienteOrden = 1;
    private int $_orden = 0;
    
    // Constructor
    public function __construct(string $descripcion, int $edad=10)
    {
        $this->_descripcion = $descripcion;
        $this->_edad = $edad;
        $this-> _asignarOrden();
    }


    public function getDescripcion(): string
    {
        return $this->_descripcion;
    }

    public function getEdad(): int
    {
        return $this->_edad;
    }

    public function setDescripcion(string $val): void
    {
        $this->_descripcion=$val;
    }


    /**
     * devuelve una frase que representa el sonido
     *
     * @return string
     */
    abstract public function sonido():string;

    /**
     * deveulve los pasos necesarios para afinar el instrumento
     *
     * @return string
     */
    abstract public function afinar():string;

    /**
     * duncion que envejece en 1 año la edad del instrumento
     *
     * @return void
     */
    public function envejecer(): void
    {
        $this->_edad++;
    }

    /**
     * funcion que le asigna un orden a la instancia e incrementa la variable estatica para la siguiente
     * 
     * @return void
     */
    protected function _asignarOrden(): void
    {
        $this->_orden = self::$_siguienteOrden;
        self::$_siguienteOrden++;
    }

    public function __toString(): string{
        return "instrumento con descripción {$this->_descripcion}, " .
               "instancia {$this->_orden} de un total de " . (self::$_siguienteOrden - 1) . ". " .
               "Tiene {$this->_edad} años. " .
               "La clase es " . get_class($this);
    }

    //Se deshabilita la sobrecarga dinámica de propiedades
    public function __set(string $nombre, mixed $valor): void
    {
        throw new Exception('No existe la propiedad ' . $nombre);
    }
 
    public function __get(string $nombre): mixed
    {
        throw new Exception('No existe la propiedad ' . $nombre);
    }
 
    public function __isset(string $nombre): bool
    {
        return false;
    }
 
    public function __unset(string $nombre): void
    {
        throw new Exception('No existe la propiedad ' . $nombre);
    }


}