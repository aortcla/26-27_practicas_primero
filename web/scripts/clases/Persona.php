<?php
class Persona{
    private string $_nombre;
    private string $_fecha_nacimiento;
    private string $_domicilio;
    private string $_localidad;
    private EstadoCivil $_estado;

    /**
     * Constructor privado sin parámetros: rellena valores por defecto
     */
    private function __construct()
    {
        $this->_nombre = "prueba";
        $this->_fecha_nacimiento = "01/01/2000";
        $this->_domicilio = "carrera 12";
        $this->_localidad = "antequera";
        $this->_estado = EstadoCivil::Soltero;
    }

    /**
     * Constructor estático con todas las propiedades
     */
    public static function registrarPersona(string $nombre, string $fecha_nacimiento,
                                            string $domicilio, string $localidad,
                                            EstadoCivil $estado): static
    {
        $persona = new static();
        $persona->setNombre($nombre);
        $persona->setFechaNacimiento($fecha_nacimiento);
        $persona->setDomicilio($domicilio);
        $persona->setLocalidad($localidad);
        $persona->setEstado($estado);

        return $persona;
    }

    public function getNombre(): string { return $this->_nombre; }
    public function setNombre(string $nombre): void { $this->_nombre = $nombre; }

    public function getFechaNacimiento(): string { return $this->_fecha_nacimiento; }
    public function setFechaNacimiento(string $fecha): void { $this->_fecha_nacimiento = $fecha; }

    public function getDomicilio(): string { return $this->_domicilio; }
    public function setDomicilio(string $domicilio): void { $this->_domicilio = $domicilio; }

    public function getLocalidad(): string { return $this->_localidad; }
    public function setLocalidad(string $localidad): void { $this->_localidad = $localidad; }

    public function getEstado(): EstadoCivil { return $this->_estado; }
    public function setEstado(EstadoCivil $estado): void { $this->_estado = $estado; }


    public function __toString(): string
    {
        return "{$this->_nombre} es una persona " . mb_strtolower($this->_estado->descripcion()) .
               " nacida en {$this->_fecha_nacimiento} y que vive en {$this->_localidad}";
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