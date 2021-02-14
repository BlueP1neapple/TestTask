<?php
namespace Dmitry\Functions;

function saveFile($arr)
{
    $filename = 'ObjectArray.json';
    $data = json_encode($arr);
    file_put_contents($filename, $data);
}

