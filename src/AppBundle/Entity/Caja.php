<?php

namespace AppBundle\Entity;

/**
 * Caja
 */
class Caja
{
    /**
     * @var integer
     */
    private $idCaja;

    /**
     * @var integer
     */
    private $idPersona;

    /**
     * @var \DateTime
     */
    private $fechaCaja = 'CURRENT_TIMESTAMP';

    /**
     * @var boolean
     */
    private $activa = '1';


    /**
     * Get idCaja
     *
     * @return integer
     */
    public function getIdCaja()
    {
        return $this->idCaja;
    }

    /**
     * Set idPersona
     *
     * @param integer $idPersona
     *
     * @return Caja
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return integer
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set fechaCaja
     *
     * @param \DateTime $fechaCaja
     *
     * @return Caja
     */
    public function setFechaCaja($fechaCaja)
    {
        $this->fechaCaja = $fechaCaja;

        return $this;
    }

    /**
     * Get fechaCaja
     *
     * @return \DateTime
     */
    public function getFechaCaja()
    {
        return $this->fechaCaja;
    }

    /**
     * Set activa
     *
     * @param boolean $activa
     *
     * @return Caja
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean
     */
    public function getActiva()
    {
        return $this->activa;
    }
}

