<?php
namespace Dmitry\Classes;
require_once "Dmitry/Classes/Figure.php";

    class Circle extends Figure
    {
        public $rad;

        function area()
        {
            $this->setS(M_PI * $this->rad ^ 2);

            return [$this->getS(), $this->rad];
        }
    }
