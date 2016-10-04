<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 4/10/16
 * Time: 18:46
 */

namespace figura;



require_once 'Punto.php';

abstract class Figura
{
    protected $origen;

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


    private static $numFiguras = 0;

    /**
     * Figura constructor.
     * @param Punto $origen
     */
    function __construct(Punto $origen)
    {
       self::$numFiguras++;
       $this->origen =$origen;
    }

    /**
     * @return int
     */
    public static function getNumFiguras(): int
    {
        return self::$numFiguras;
    }

    /**
     * area
     * Description
     * return int
     */
    abstract public function area();

    /**
     * perimetro
     * Description
     * return mixed
     */
    abstract public function perimetro();

    /**
     * @param int $dx
     * @return mixed
     */
    abstract public function escalar($dx);

    /**
     *
     */
    public function __toString()
    {

        // TODO: Implement __toString() method.
    }




}

