<?php
// Parent class
class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function speak()
    {
        echo "Some generic animal sound\n";
    }
}

// Child class - Dog
class Dog extends Animal
{
    public function speak()
    {
        echo $this->name . " says: Woof! 🐶\n";
    }
}

// Child class - Cat
class Cat extends Animal
{
    public function speak()
    {
        echo $this->name . " says: Meow! 🐱\n";
    }
}

// Using the classes
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

$dog->speak(); // Output: Buddy says: Woof!
$cat->speak(); // Output: Whiskers says: Meow!
