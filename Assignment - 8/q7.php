<?php
// Define the Employee class
class Employee {
    // Data members
    private $empName;
    private $empNo;
    private $basicSal;
    private $da;
    private $hra;
    private $grossSal;

    // Parameterized constructor to initialize empName, empNo, and basicSal
    public function __construct($empName, $empNo, $basicSal) {
        $this->empName = $empName;
        $this->empNo = $empNo;
        $this->basicSal = $basicSal;
        $this->da = 0;
        $this->hra = 0;
        $this->grossSal = 0;
    }

    // Method to calculate the gross salary
    public function calGrossSal() {
        $this->da = 0.2 * $this->basicSal; // DA is 20% of basicSal
        $this->hra = 0.1 * $this->basicSal; // HRA is 10% of basicSal
        $this->grossSal = $this->basicSal + $this->da + $this->hra;
    }

    // Method to display employee details
    public function showEmpDetails() {
        echo "<h3>Employee Details:</h3>";
        echo "Employee Name: {$this->empName}<br>";
        echo "Employee Number: {$this->empNo}<br>";
        echo "Basic Salary: ₹{$this->basicSal}<br>";
        echo "DA (20%): ₹{$this->da}<br>";
        echo "HRA (10%): ₹{$this->hra}<br>";
        echo "Gross Salary: ₹{$this->grossSal}<br>";
        echo "<hr>";
    }
}

// Create and display details for 2 employees
// Employee 1
$employee1 = new Employee("Alice Brown", 101, 50000);
$employee1->calGrossSal();
$employee1->showEmpDetails();

// Employee 2
$employee2 = new Employee("John Smith", 102, 60000);
$employee2->calGrossSal();
$employee2->showEmpDetails();
?>
