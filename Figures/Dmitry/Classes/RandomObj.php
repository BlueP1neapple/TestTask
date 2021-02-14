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
                $cir->Area();
                break;
            case '2':
                $tri = new Triangle();
                $tri->side0 = $this->randomSide();
                $tri->side1 = $this->randomSide();
                $tri->side2 = $this->randomSide();
                $tri->Area();
                break;
            case '3':
                $rect = new Rectangle();
                $rect->side0 = $this->randomSide();
                $rect->side1 = $this->randomSide();
                $rect->Area();
        }
    }
}