<?php

include_once("circle.php");
include_once("square.php");
include_once("shapeInterface.php");

/*
$circle1=new Circle(5);
echo $circle1->calculateArea();
echo "<br>";
$square1=new Square(10);
echo $square1->calculateArea();
*/
$shapes = [
    new Circle(5),
    new Square(4),
    new Circle(10),
    new Square(8),
];
foreach ($shapes as $shape) {
    if ($shape instanceof shape) {  
        echo 'This is a shape';
        echo "<br>";
}
echo "Nombre de la clase: " . get_class($shape);
echo "<br>";
echo "Area:  {$shape->calculateArea()}";
echo "<br>";
}