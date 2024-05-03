<?php

class Persona
{
    private $nombre;
    
    private $apellido;

    

    private $email;

    private $fechaNac;

    private $numero;

    private $genero;

    private $pais;


    /**
     * Constructor.
     * @param $nombre
   
     * @param $email
     * @param $fechaNac
     * @param $numero
     * @param $genero
     * @param $pais
     * @param $apellido
     */
    public function __construct(
        $nombre,
        $apellido,
        $email,
        $fechaNac,
        $numero,
        $genero,
        $pais,
    ) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->fechaNac = $fechaNac;
        $this->numero = $numero;
        $this->genero = $genero;
        $this->pais = $pais;
        $this->apellido = $apellido;
    }
}
