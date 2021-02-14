<?php
namespace Dmitry\Classes;
require_once 'Dmitry/Classes/RandomObj.php';
use Dmitry\Classes\RandomObj as RandO;
use function Dmitry\Functions\printArray;

include 'Dmitry/Functions/printArray.php';
class SortedObject
{
    public $finalArray = array();
    function sortObject()
    {
        $ro = new RandO();

        for($i = 0;$i < random_int(10, 50); $i++)
        {
            $object[] = $ro->addRandomObject();
        }

        foreach ($object as list ($s, $side1, $side2, $side3))
        {
            array_push($this->finalArray, [$s, $side1, $side2, $side3]);
        }
        arsort($this->finalArray);
        printArray($this->finalArray);
    }
    function rObj()
    {
        return $this->finalArray;
    }
}