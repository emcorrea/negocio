<?php

namespace AppBundle\Entity;

/**
 * Genero
 */
class Genero
{
    /**
     * @var integer
     */
    private $idGenero;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $activo = '1';


    /**
     * Get idGenero
     *
     * @return integer
     */
    public function getIdGenero()
    {
        return $this->idGenero;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Genero
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Genero
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}

