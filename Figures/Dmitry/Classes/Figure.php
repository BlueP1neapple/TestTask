<?php
namespace Dmitry\Classes;


abstract class Figure
{
    private $s;
    /**
     * @return mixed
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * @param mixed $s
     */
    public function setS($s): void
    {
        $this->s = $s;
    }
    abstract function area();

}