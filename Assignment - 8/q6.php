<?php
// Define the Employee class
class Employee {
    // Data members
    private $empId;
    private $empName;
    private $designation;

    // Constructor to initialize data members
    public function __construct($empId, $empName, $designation) {
        $this->empId = $empId;
        $this->empName = $empName;
        $this->designation = $designation;
    }

    // Method to display employee details
    public function displayDetails() {
        echo "Employee ID: {$this->empId}<br>";
        echo "Employee Name: {$this->empName}<br>";
        echo "Designation: {$this->designation}<br>";
        echo "<hr>";
    }
}

// Create and display details for 3 employees
echo "<h3>Employee Details:</h3>";

// Employee 1
$employee1 = new Employee(101, "John Doe", "Software Engineer");
$employee1->displayDetails();

// Employee 2
$employee2 = new Employee(102, "Jane Smith", "Project Manager");
$employee2->displayDetails();

// Employee 3
$employee3 = new Employee(103, "Alice Brown", "Data Analyst");
$employee3->displayDetails();
?>
