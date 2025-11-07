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

// Using polymorphism
$animals = [
    new Dog("Buddy"),
    new Cat("Whiskers"),
];

foreach ($animals as $animal) {
    $animal->speak(); // Each animal speaks differently
}
