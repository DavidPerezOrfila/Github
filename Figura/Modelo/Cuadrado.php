<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 4/10/16
 * Time: 17:45
 */

namespace Modelo;
require_once '../Modelo/Punto.php';



class Cuadrado
{
    private $origen;
    private $lado;

    /**
     * Cuadrado constructor.
     * @param Punto $origen
     * @param $lado
     */
    public function __construct(Punto $origen, $lado)
    {
        $this->origen =$origen;
        $this->lado =$lado;
    }

    /**
     * @return Punto
     */
    public function getOrigen(): Punto
    {
        return $this->origen;
    }

    /**
     * @param Punto $origen
     */
    public function setOrigen(Punto $origen)
    {
        $this->origen = $origen;
    }

    /**
     * @return int
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * @param $lado
     */
    public function setLado($lado)
    {
        $this->lado = $lado;
    }

    /**
     * toString()
     */
    public function __toString()
    {
        return 'Cuadrado{' . $this->getOrigen() . ',' . $this->getLado() . '}';
        // TODO: Implement __toString() method.
    }

    /**
     * @param $destino
     */
    public function desplazar($destino)
    {
        $this->getOrigen()->desplazar($destino);
    }

    public function esIgual(Cuadrado $cuadrado)
    {
        return $this->getOrigen()->esIgual($cuadrado->getOrigen()) &&
        $this->getLado() == $cuadrado->getLado();
    }

}

