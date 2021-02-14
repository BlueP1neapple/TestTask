<?php
namespace Dmitry\Classes;
require_once 'Dmitry/Classes/Rectangle.php';
require_once 'Dmitry/Classes/Circle.php';
require_once 'Dmitry/Classes/Triangle.php';
use Dmitry\Classes\Circle as Circle;
use Dmitry\Classes\Rectangle as Rectangle;
use Dmitry\Classes\Triangle as Triangle;

class RandomObj
{
    function randomSide(): int
    {
        return random_int(1, 100);
    }
    function addRandomObject(){
        try {
            $r = random_int(1, 3);
        } catch (\Exception $e) {
        }
        switch ($r)
        {
            case '1':
                $cir = new Circle();
                $cir->rad = $this->randomSide();
                $cir->area();
                return $cir->area();
            case '2':
                $tri = new Triangle();
                $res = 0;
                while($res == 0)
                {
                    $tri->side0 = $this->randomSide();
                    $tri->side1 = $this->randomSide();
                    $tri->side2 = $this->randomSide();
                    $res = $tri->area();
                    if($res != 0)
                    {
                        return $res;
                    }
                }


            case '3':
                $rect = new Rectangle();
                $rect->side0 = $this->randomSide();
                $rect->side1 = $this->randomSide();
                return $rect->area();

        }
    }
}