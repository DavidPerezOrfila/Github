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

    private static $numFiguras = 0;

    /**
     * Figura constructor.
     * @param Punto $origen
     */
    function __construct(Punto $origen)
    {

    }

}

