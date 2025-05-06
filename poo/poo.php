<?php

class Person
{
     // Properties (attributes)
     private $name;
     private $email;
     private $password;

     // Constructor
     public function __construct($n, $e, $p)
     {
          $this->name = $n;
          $this->email = $e;
          $this->password = $p;
     }

     // Encapsulation: Getters and Setters
     public function getName()
     {
          return $this->name;
     }

     public function setName($name)
     {
          $this->name = $name;
     }

     public function getEmail()
     {
          return $this->email;
     }

     public function setEmail($email)
     {
          $this->email = $email;
     }

     public function getPassword()
     {
          return $this->password;
     }

     public function setPassword($newPassword)
     {
          $this->password = $newPassword;
     }

     // Method
     public function getInfo()
     {
          return "Name: " . $this->name . ", Email: " . $this->email;
     }
}

#####################

// Polymorphism: Overriding Methods in Child Classes
class Teacher extends Person
{
     private $salary;

     public function __construct($n, $e, $p, $s)
     {
          parent::__construct($n, $e, $p);
          $this->salary = $s;
     }

     public function getSalary()
     {
          return $this->salary;
     }

     public function setSalary($salary)
     {
          $this->salary = $salary;
     }

     // Overriding getInfo method
     public function getInfo()
     {
          return parent::getInfo() . ", Salary: " . $this->salary;
     }

     public function getYearlySalary()
     {
          return $this->salary * 12;
     }
}

#####################

// Example Usage
$person1 = new Person("Ali", "ali@gmail.com", "password");
echo $person1->getInfo(); // Access method
$person1->setPassword("newpassword"); // Setter

$teacher = new Teacher("Kawtar", "kawtar@gmail.com", "jawtar", 10000);
echo $teacher->getInfo(); // Polymorphism: Access overridden method
echo $teacher->getYearlySalary(); // Access specific method of Teacher

#####################

// Static Properties and Methods
class MathStuff
{
     public static $pi = 3.1415926535;

     public static function multiply($a, $b)
     {
          return $a * $b;
     }
}

$pi = MathStuff::$pi;
$num = MathStuff::multiply(2, 3);

#####################

// Abstract Classes
abstract class Animal
{
     protected $name;

     public function __construct($name)
     {
          $this->name = $name;
     }

     abstract public function makeSound();

     public function getName()
     {
          return $this->name;
     }
}

class Dog extends Animal
{
     public function makeSound()
     {
          return "Woof!";
     }
}

class Cat extends Animal
{
     public function makeSound()
     {
          return "Meow!";
     }
}

// Polymorphism: Different behavior for makeSound
$dog = new Dog('Buddy');
echo $dog->makeSound(); // Woof!

$cat = new Cat('Kitty');
echo $cat->makeSound(); // Meow!
