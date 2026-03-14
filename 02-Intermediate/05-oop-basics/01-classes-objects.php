<?php
/**
 * Classes and Objects in PHP
 */

echo "<h2>Classes and Objects</h2>";

// Basic class definition
echo "<h3>1. Basic Class</h3>";
class Person {
    // Properties
    public $name;
    public $age;
    
    // Method
    public function introduce() {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

// Creating objects
$person1 = new Person();
$person1->name = "Alice";
$person1->age = 25;
echo $person1->introduce() . "<br>";

$person2 = new Person();
$person2->name = "Bob";
$person2->age = 30;
echo $person2->introduce() . "<br>";

// Class with constructor
echo "<br><h3>2. Class with Constructor</h3>";
class Car {
    public $brand;
    public $model;
    public $year;
    
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    
    public function getInfo() {
        return "{$this->year} {$this->brand} {$this->model}";
    }
}

$car1 = new Car("Toyota", "Camry", 2020);
$car2 = new Car("Honda", "Accord", 2021);
echo "Car 1: " . $car1->getInfo() . "<br>";
echo "Car 2: " . $car2->getInfo() . "<br>";

// Methods with parameters
echo "<br><h3>3. Methods with Parameters</h3>";
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }
    
    public function subtract($a, $b) {
        return $a - $b;
    }
    
    public function multiply($a, $b) {
        return $a * $b;
    }
}

$calc = new Calculator();
echo "5 + 3 = " . $calc->add(5, 3) . "<br>";
echo "10 - 4 = " . $calc->subtract(10, 4) . "<br>";
echo "6 × 7 = " . $calc->multiply(6, 7) . "<br>";

// Class constants
echo "<br><h3>4. Class Constants</h3>";
class MathHelper {
    const PI = 3.14159;
    const E = 2.71828;
    
    public function circleArea($radius) {
        return self::PI * $radius * $radius;
    }
}

echo "PI: " . MathHelper::PI . "<br>";
$math = new MathHelper();
echo "Circle area (radius 5): " . $math->circleArea(5) . "<br>";

// Practical example: Bank Account
echo "<br><h3>5. Practical Example: Bank Account</h3>";
class BankAccount {
    public $accountNumber;
    public $holderName;
    public $balance;
    
    public function __construct($accountNumber, $holderName, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->holderName = $holderName;
        $this->balance = $initialBalance;
    }
    
    public function deposit($amount) {
        $this->balance += $amount;
        return "Deposited: $$amount. New balance: $" . $this->balance;
    }
    
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrawn: $$amount. New balance: $" . $this->balance;
        } else {
            return "Insufficient funds!";
        }
    }
    
    public function getBalance() {
        return "Current balance: $" . $this->balance;
    }
}

$account = new BankAccount("ACC001", "John Doe", 1000);
echo $account->getBalance() . "<br>";
echo $account->deposit(500) . "<br>";
echo $account->withdraw(300) . "<br>";
echo $account->withdraw(2000) . "<br>";

?>
