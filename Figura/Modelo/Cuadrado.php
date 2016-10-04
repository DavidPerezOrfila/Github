<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 4/10/16
 * Time: 17:45
 */

namespace figura;
require_once '../Punto.php';
require_once '../Figura.php';


class Cuadrado extends Figura
{

    private $lado;

    /**
     * Cuadrado constructor.
     * @param Punto $origen
     * @param $lado
     */
    public function __construct(Punto $origen, $lado)
    {
        parent::__construct($origen);
        $this->lado =$lado;
    }





    /**
     * toString()
     */
    public function __toString()
    {
        $origenToSting =parent::getOrigen();
        return 'Cuadrado{' . $origenToSting . ',' . $this->getLado() . '}';
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

    /**
     * area
     * Description
     * return int
     */
    public function area()
    {
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

