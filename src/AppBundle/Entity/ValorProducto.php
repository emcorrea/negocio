<?php

namespace AppBundle\Entity;

/**
 * ValorProducto
 */
class ValorProducto
{
    /**
     * @var integer
     */
    private $idValor;

    /**
     * @var integer
     */
    private $idProducto;

    /**
     * @var integer
     */
    private $valor;

    /**
     * @var boolean
     */
    private $activo = '1';


    /**
     * Get idValor
     *
     * @return integer
     */
    public function getIdValor()
    {
        return $this->idValor;
    }

    /**
     * Set idProducto
     *
     * @param integer $idProducto
     *
     * @return ValorProducto
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return integer
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     *
     * @return ValorProducto
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return ValorProducto
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

