<?php

interface IFabricable{
    
    /**
     * metodo que devuelve los pasos para fabricar
     *
     * @return string
     */
    public function metodoFabricacion():string;

    /**
     * metodo que devuelve los pasos para reciclar 
     *
     * @return string
     */
    public function metodoReciclado():string;

}