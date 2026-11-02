<?php
enum EstadoCivil: int
{
    case Soltero = 10;
    case Casado = 20;
    case Pareja = 30;
    case Viudo = 40;

    /**
     * @return string nombre del caso concreto
     */
    public function descripcion(): string
    {
        return $this->name;
    }

    /**
     * @return int valor del caso concreto
     */
    public function valor(): int
    {
        return $this->value;
    }

    /**
     * @return array todos los casos
     */
    public static function casos(): array
    {
        return self::cases();
    }
}