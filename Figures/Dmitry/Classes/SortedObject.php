<?php


namespace Dmitry\Classes;
require_once 'Dmitry/Classes/Save.php';
require_once 'Dmitry/Classes/RandomObj.php';
use Dmitry\Classes\RandomObj as RandO;
use Dmitry\Classes\Save as Save;

class SortedObject
{
    function sortObject()
    {
        $sa = new Save();
        $ro = new RandO();
        for($i = 0;$i < random_int(10, 50); $i++)
        {
            $object[] = $ro->addRandomObject();
        }

        $finalArray = array();
        foreach ($object as list ($s, $side1, $side2, $side3))
        {
            array_push($finalArray, [$s, $side1, $side2, $side3]);

        }
        echo "<br>";
        arsort($finalArray);

        foreach ($finalArray as list($s, $s1, $s2, $s3))
        {
            if($s3 != null)
            {
                echo "S = $s; Side 1 = $s1; Side 2 = $s2; Side 3 = $s3; <br>";
            }elseif ($s2 != null){
                echo "S = $s; Side 1 = $s1; Side 2 = $s2;<br>";
            }else{
                echo "S = $s; Radius = $s1;<br>";
            }
        }

        $sa->data = $finalArray;
    }
}