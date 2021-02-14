<?php
namespace Dmitry\Functions;

function printArray($arr)
{
    foreach ($arr as list($s, $s1, $s2, $s3))
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
}