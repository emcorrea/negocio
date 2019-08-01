<?php

namespace AppBundle\Entity;

/**
 * Persona
 */
class Persona
{
    /**
     * @var integer
     */
    private $idPersona;

    /**
     * @var integer
     */
    private $rut;

    /**
     * @var string
     */
    private $dv;

    /**
     * @var string
     */
    private $nombres;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var integer
     */
    private $idGenero;

    /**
     * @var \DateTime
     */
    private $fechaNacimiento;


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
     * Set rut
     *
     * @param integer $rut
     *
     * @return Persona
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return integer
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set dv
     *
     * @param string $dv
     *
     * @return Persona
     */
    public function setDv($dv)
    {
        $this->dv = $dv;

        return $this;
    }

    /**
     * Get dv
     *
     * @return string
     */
    public function getDv()
    {
        return $this->dv;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Persona
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Persona
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set idGenero
     *
     * @param integer $idGenero
     *
     * @return Persona
     */
    public function setIdGenero($idGenero)
    {
        $this->idGenero = $idGenero;

        return $this;
    }

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
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Persona
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
}

