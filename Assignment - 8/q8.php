<?php
// Define the Complex class
class Complex {
    // Data members
    private $real;
    private $img;

    // Parameterized constructor to initialize real and img parts
    public function __construct($real, $img) {
        $this->real = $real;
        $this->img = $img;
    }

    // Method to display the complex number
    public function display() {
        $sign = $this->img >= 0 ? '+' : ''; // Add '+' sign for positive imaginary part
        echo "{$this->real}{$sign}{$this->img}i<br>";
    }

    // Method to add two complex numbers
    public function add($other) {
        $realPart = $this->real + $other->real;
        $imgPart = $this->img + $other->img;
        return new Complex($realPart, $imgPart);
    }

    // Method to subtract two complex numbers
    public function subtract($other) {
        $realPart = $this->real - $other->real;
        $imgPart = $this->img - $other->img;
        return new Complex($realPart, $imgPart);
    }

    // Method to multiply two complex numbers
    public function multiply($other) {
        $realPart = ($this->real * $other->real) - ($this->img * $other->img);
        $imgPart = ($this->real * $other->img) + ($this->img * $other->real);
        return new Complex($realPart, $imgPart);
    }
}

// Create two complex numbers
$complex1 = new Complex(5, 3); // 5+3i
$complex2 = new Complex(2, -4); // 2-4i

echo "<h3>Complex Numbers:</h3>";
echo "Complex Number 1: ";
$complex1->display();
echo "Complex Number 2: ";
$complex2->display();

// Perform addition
$additionResult = $complex1->add($complex2);
echo "<h3>Addition Result:</h3>";
$additionResult->display();

// Perform subtraction
$subtractionResult = $complex1->subtract($complex2);
echo "<h3>Subtraction Result:</h3>";
$subtractionResult->display();

// Perform multiplication
$multiplicationResult = $complex1->multiply($complex2);
echo "<h3>Multiplication Result:</h3>";
$multiplicationResult->display();
?>
