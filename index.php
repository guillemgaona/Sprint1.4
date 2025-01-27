<?php
// Lvl 1 Ex 1

class Employee {
    private $name;
    private $salary;

    public function initialize($name, $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }

    public function print() {
        if ($this -> salary > 6000) {
            $message = ", ha de pagar impostos. <br>";
        } else {
            $message = ", no ha de pagar impostos. <br>";
        }
        return $this -> name . $message;
    }
}

    $emp1 = new Employee();
    $emp1 -> initialize("Guillem", 3000);
    echo $emp1 -> print();
    $emp2 = new Employee();
    $emp2 -> initialize("Ruben", 20000);
    echo $emp2 -> print();


    // Lvl 1 Ex 2

    class Shape {
        protected $height;
        protected $width;

        public function __construct($height, $width) {
            $this -> height = $height;
            $this -> width = $width;
        }
    }

    class Triangle extends Shape {
        
        public function area() {
            return "L'àrea és de: " . ($this -> height * $this -> width) / 2;
        }
    }

    class Rectangle extends Shape {

        public function area() {
            return "L'àrea és de: " . $this -> height * $this -> width;
        }
    }

    $triangle1 = new Triangle(3,2);
    echo $triangle1 -> area() . "<br>";
    $triangle2 = new Triangle (10, 6); // Prova per si em puc saltar el pas del constructor
    echo $triangle2 -> area() . "<br>";
    $rectangle1 = new Rectangle(6,4);
    echo $rectangle1 -> area(). "<br>";
    $rectangle2 = new Rectangle(783,9934);
    echo $rectangle2 -> area(). "<br>";
    
?>