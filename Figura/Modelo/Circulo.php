<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 30/09/16
 * Time: 16:10
 */

namespace figura;
require_once 'Punto.php';
require_once 'Figura.php';

class Circulo extends Figura
{

    private $radio;

    /**
     * Circulo constructor.
     * @param Punto $origen
     * @param $radio
     */
    public function __construct(Punto $origen, $radio)
    {
        parent::__construct($origen);
        $this->radio =$radio;

    }


    /**
     * @param Punto $origen
     * @return $this
     */
    public function setOrigen(Punto $origen)
    {
        $this->origen = $origen;
        return $this;
    }

    /**
     * @return int
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param $radio
     * @return $this
     */
    public function setRadio($radio)
    {
        $this->radio = (float) $radio;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $origenToString =parent::getOrigen();
        return 'Circulo{' . $origenToString . ', ' . $this->getRadio() . '}'; //no es necesario poner el __toString()

        // TODO: Implement __toString() method.
    }


    /**
     * @param $destino
     */
    public function desplazar($destino)
    {
        $this->getOrigen()->desplazar($destino);
    }

    /**
     *
     */
    public function esIgual(Figura $circulo)
    {

        return $this->getOrigen()->esIgual($circulo->getOrigen()) &&
        $this->getRadio() == $circulo->getRadio();
    }

    /**
     * @return float
     */
    public function area()
    {
        return M_PI * pow($this->radio, 2);
    }

    /**
     * @return int
     */
    public function perimetro()
    {
        return 2 * M_PI * $this->radio;
    }

    /**
     * @param int $dx
     */
    public function escalar($dx)
    {
        $this->radio *= $dx;
    }



}