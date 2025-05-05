<?php

class Shape
{
    public function draw() {}
}

class Rec extends Shape
{
    public function draw()
    {
        return "draw rec";
    }
}

class Square extends Shape
{
    public function draw()
    {
        return "draw Square";
    }
}

function make_shape($Shape)
{
    $Shape->draw();
}

$rec1 = new Rec();
echo $rec1->draw();

echo "<br>";

$Square1 = new Square();
echo $Square1->draw();
