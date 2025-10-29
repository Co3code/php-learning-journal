<?php
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    // Getter for name
    public function getName()
    {
        return $this->name;
    }

    // Setter for age
    public function setAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }
}

// Using the class
$user = new User("Alice", 25);
echo $user->getName(); // Output: Alice
$user->setAge(30);
echo $user->getAge(); // Output: 30
