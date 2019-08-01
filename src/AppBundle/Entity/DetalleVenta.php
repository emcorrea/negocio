<?php

namespace AppBundle\Entity;

/**
 * DetalleVenta
 */
class DetalleVenta
{
    /**
     * @var integer
     */
    private $idDetalleVenta;

    /**
     * @var integer
     */
    private $idVenta;

    /**
     * @var integer
     */
    private $idProducto;

    /**
     * @var integer
     */
    private $idValor;

    /**
     * @var integer
     */
    private $cantidad = '0';


    /**
     * Get idDetalleVenta
     *
     * @return integer
     */
    public function getIdDetalleVenta()
    {
        return $this->idDetalleVenta;
    }

    /**
     * Set idVenta
     *
     * @param integer $idVenta
     *
     * @return DetalleVenta
     */
    public function setIdVenta($idVenta)
    {
        $this->idVenta = $idVenta;

        return $this;
    }

    /**
     * Get idVenta
     *
     * @return integer
     */
    public function getIdVenta()
    {
        return $this->idVenta;
    }

    /**
     * Set idProducto
     *
     * @param integer $idProducto
     *
     * @return DetalleVenta
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
     * Set idValor
     *
     * @param integer $idValor
     *
     * @return DetalleVenta
     */
    public function setIdValor($idValor)
    {
        $this->idValor = $idValor;

        return $this;
    }

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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DetalleVenta
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}

