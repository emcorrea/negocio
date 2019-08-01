<?php

namespace AppBundle\Entity;

/**
 * Venta
 */
class Venta
{
    /**
     * @var integer
     */
    private $idVenta;

    /**
     * @var integer
     */
    private $idCaja;

    /**
     * @var integer
     */
    private $idFormaPago;

    /**
     * @var integer
     */
    private $totalVenta;

    /**
     * @var integer
     */
    private $numeroCuotas = '0';

    /**
     * @var string
     */
    private $numeroBoleta;

    /**
     * @var \DateTime
     */
    private $fecha = 'CURRENT_TIMESTAMP';


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
     * Set idCaja
     *
     * @param integer $idCaja
     *
     * @return Venta
     */
    public function setIdCaja($idCaja)
    {
        $this->idCaja = $idCaja;

        return $this;
    }

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
     * Set idFormaPago
     *
     * @param integer $idFormaPago
     *
     * @return Venta
     */
    public function setIdFormaPago($idFormaPago)
    {
        $this->idFormaPago = $idFormaPago;

        return $this;
    }

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
     * Set totalVenta
     *
     * @param integer $totalVenta
     *
     * @return Venta
     */
    public function setTotalVenta($totalVenta)
    {
        $this->totalVenta = $totalVenta;

        return $this;
    }

    /**
     * Get totalVenta
     *
     * @return integer
     */
    public function getTotalVenta()
    {
        return $this->totalVenta;
    }

    /**
     * Set numeroCuotas
     *
     * @param integer $numeroCuotas
     *
     * @return Venta
     */
    public function setNumeroCuotas($numeroCuotas)
    {
        $this->numeroCuotas = $numeroCuotas;

        return $this;
    }

    /**
     * Get numeroCuotas
     *
     * @return integer
     */
    public function getNumeroCuotas()
    {
        return $this->numeroCuotas;
    }

    /**
     * Set numeroBoleta
     *
     * @param string $numeroBoleta
     *
     * @return Venta
     */
    public function setNumeroBoleta($numeroBoleta)
    {
        $this->numeroBoleta = $numeroBoleta;

        return $this;
    }

    /**
     * Get numeroBoleta
     *
     * @return string
     */
    public function getNumeroBoleta()
    {
        return $this->numeroBoleta;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Venta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}

