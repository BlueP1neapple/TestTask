<?php
namespace Dmitry\Classes;
require_once "Dmitry/Classes/Figure.php";


    class Rectangle extends Figure
    {
        public $side0, $side1;

        function area()
        {
            $this->setS($this->side0 * $this->side1);
            return [$this->getS(), $this->side0, $this->side1];

        }
    }
