<?php
namespace Dmitry\Classes;
require_once "Dmitry/Classes/Figure.php";

    class Triangle extends Figure
    {
        public $side0, $side1, $side2;

        function area()
        {
            if($this->side0 + $this->side1 > $this->side2 &&
            $this->side0 + $this->side2 > $this->side2 &&
            $this->side1 + $this->side2 > $this->side2) {
                $p = 1 / 2 * ($this->side0 + $this->side1 + $this->side2);
                $this->setS(sqrt($p));

                return  [$this->getS(), $this->side0, $this->side1, $this->side2];
            } else {

                return 0;
            }
        }
    }
