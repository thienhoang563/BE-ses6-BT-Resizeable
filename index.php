<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area before: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter before: ' . $circle->calculatePerimeter() . '<br />';
$circle->resize(30);
echo 'Circle area after: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter after: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder( 'Cylinder 01', 3 , 4);
echo '<br>Cylinder area before: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter before: ' . $cylinder->calculatePerimeter() . '<br />';
$cylinder->resize(40);
echo 'Cylinder area after: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter after: ' . $cylinder->calculatePerimeter() . '<br />';


$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo '<br>Rectangle area before: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter before: ' . $rectangle->calculatePerimeter() . '<br />';
$rectangle->resize(35);
echo 'Rectangle area after: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter after: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4 , 4, 4);
echo '<br>Square area before: ' . $square->calculateArea() . '<br />';
echo 'Square perimeter before: ' . $square->calculatePerimeter() . '<br />';
$square->resize(50);
echo 'Square area after: ' . $square->calculateArea() . '<br />';
echo 'Square perimeter after: ' . $square->calculatePerimeter() . '<br />';
