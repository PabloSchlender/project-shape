<?php
//Área de un círculo = π * r² 

include_once("shapeInterface.php");

class Circle implements Shape
{

    private $radius;

    public function __construct($r)
    {
        $this->radius = $r;
    }

    public function calculateArea(): float
    {

        return 3.14 * $this->radius * $this->radius;
    }
}