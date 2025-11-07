<?php
// Abstract class
abstract class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Abstract method - must be implemented in child classes
    abstract public function area();

    public function getName()
    {
        return $this->name;
    }
}

// Child class - Rectangle
class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        parent::__construct("Rectangle");
        $this->width  = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

// Child class - Circle
class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        parent::__construct("Circle");
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * $this->radius ** 2;
    }
}

// Using abstraction
$shapes = [
    new Rectangle(4, 5),
    new Circle(3),
];

foreach ($shapes as $shape) {
    echo $shape->getName() . " area: " . $shape->area() . "\n";
}
