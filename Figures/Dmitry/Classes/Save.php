<?php
namespace Dmitry\Classes;


class Save
{
    public $data;
    function saveFile()
    {
        $filename = 'sortedObject.txt';
        file_put_contents($filename, $this->data);
    }
}