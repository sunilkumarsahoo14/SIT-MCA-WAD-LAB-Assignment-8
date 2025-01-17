<?php
// Parent class Person
class Person {
    // Attributes
    protected $name;
    protected $age;
    
    // Constructor to initialize name and age
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to display name and age
    public function display() {
        echo "Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
    }
}

// Child class Student inheriting from Person
class Student extends Person {
    // Additional attributes
    private $rollNumber;
    private $branch;
    private $section;

    // Constructor to initialize all attributes
    public function __construct($name, $age, $rollNumber, $branch, $section) {
        // Call the parent constructor to initialize name and age
        parent::__construct($name, $age);

        // Initialize child-specific attributes
        $this->rollNumber = $rollNumber;
        $this->branch = $branch;
        $this->section = $section;
    }

    // Method to display student details
    public function displayStudent() {
        // Display name and age using parent class method
        $this->display();

        // Display student-specific details
        echo "Roll Number: {$this->rollNumber}<br>";
        echo "Branch: {$this->branch}<br>";
        echo "Section: {$this->section}<br>";
    }
}

// Create a Student object and test the displayStudent method
$student = new Student("John Doe", "21", "102", "Computer Science", "A");

echo "<h3>Student Details:</h3>";
$student->displayStudent();
?>
