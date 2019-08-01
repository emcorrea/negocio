<?php

namespace AppBundle\Entity;

/**
 * FormaPago
 */
class FormaPago
{
    /**
     * @var integer
     */
    private $idFormaPago;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $activo = '1';


    /**
     * Get idFormaPago
     *
     * @return integer
     */
    public function getIdFormaPago()
    {
        return $this->idFormaPago;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return FormaPago
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
     * @return FormaPago
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

