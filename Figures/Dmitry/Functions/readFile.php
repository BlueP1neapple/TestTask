<?php
namespace Dmitry\Functions;
include 'Dmitry/Functions/printArray.php';
    set_include_path("../");

    $file = "ObjectArray.json";
    chdir('../');
    $fileGet = @file_get_contents($file, FILE_USE_INCLUDE_PATH) or die("err '".error_get_last()['message']."'");

    $json = json_decode($fileGet, true);


    // Костыль не понимаю почему не могу скортмить $json своей функции printArray
    foreach ($json as list ($s, $side1, $side2, $side3))
    {
        if($side3 != null)
        {
            echo "S = $s; Side 1 = $side1; Side 2 = $side2; Side 3 = $side3; \n";
        }elseif ($side2 != null){
            echo "S = $s; Side 1 = $side1; Side 2 = $side2;";
        }else{
            echo "S = $s; Radius = $side1;";
        }
    }


