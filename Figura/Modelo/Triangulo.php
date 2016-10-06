<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 4/10/16
 * Time: 17:54
 */

namespace Modelo;
use figura\Figura;
use figura\Punto;

require_once '../Modelo/Punto.php';
require_once '../Figura.php';



class Triangulo extends Figura
{



    private $base;
    private $altura;

    /**
     * Triangulo constructor.
     * @param Punto $
     * @param $origen
     * @param $base
     * @param $altura
     */
    public function __construct(Punto $origen, $base, $altura)
    {
        parent::__construct($origen);
        $this->base =$base;
        $this->altura =$altura;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return string
     */
    public function __toString()
    {

        $origenToSting =parent::getOrigen();
        return 'Triangulo {' . $origenToSting . ' ,' . $this->getBase() . '<br>' .
        ' ,'. $this->setAltura() . '}';
        // TODO: Implement __toString() method.
    }

    /**
     * @param $destino
     */
    public function desplazar($destino)
    {
        $this->getOrigen()->desplazar($destino);
    }

    public function esIgual(Triangulo $triangulo)
    {
        return $this->getOrigen()->esIgual($triangulo->getOrigen()) &&
        $this->getBase() == $triangulo->getBase() &&
        $this->getAltura() == $triangulo->getBase();
    }

    /**
     * area
     * Description
     * return int
     */
    public function area()
    {
        return (($this->base * $this->altura)/2 );
        // TODO: Implement area() method.
    }

    /**
     * perimetro
     * Description
     * return mixed
     */
    public function perimetro()
    {

        // TODO: Implement perimetro() method.
    }

    /**
     * @param int $dx
     * @return mixed
     */
    public function escalar($dx)
    {

        // TODO: Implement escalar() method.
    }




}