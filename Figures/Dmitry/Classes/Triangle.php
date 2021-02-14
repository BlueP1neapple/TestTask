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
                echo "Triangle witch sides: ".$this->side0.", ".$this->side1.", ".$this->side2.": S = ".$this->getS()."<br \>";
            } else {
                echo "Triangle witch sides: ".$this->side0.", ".$this->side1.", ".$this->side2." cant exist! <br \>";
            }
        }
    }
