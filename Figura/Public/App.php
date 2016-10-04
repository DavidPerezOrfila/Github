<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 27/09/16
 * Time: 17:50
 */

namespace Figura;
use Modelo\Circulo;
use Modelo\Punto;

require_once '../Modelo/Punto.php';
require_once '../Modelo/Circulo.php';


class App
{
    /**
     *
     */
    public static function run()
    {
        // App::testPunto();
        App::pruebaCirculo();
    }

    public static function testPunto(){
        $p = new Punto(0, 0);
        echo $p;

        $p->setX(2);
        $p->setY(3);

        echo $p;
        $p1= new Punto(10, 0);
        $p->desplazar($p1);

        echo $p;

        $p2 = new Punto(15, 2);
        echo $p2;

        if($p1->esIgual($p2)){
            echo '<br>Son iguales';
                }else{
                    echo '<br>Son diferentes';
                }
        echo '<br>';
        echo $p2->posCuadrante();
    }

    /**
     *
     */
    Public function pruebaCirculo()
    {
        $origen= new Punto(7, 9);
        $radio= 3;
        $circulo= new Circulo($origen, $radio);
        echo $circulo;

    }


}

App::run();