<?php

class Shape {
    public function area() {
        return 0;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle(5);
echo "Circle Area: " . $circle->area() . "\n";

$rect = new Rectangle(4, 6);
echo "Rectangle Area: " . $rect->area();
