<!-- Construct the following associative array (name and their respective salary)
and perform the following operation -->

<?php
// Step 1: Create the associative array
$salaries = array(
    "Tom" => 25000,
    "Jerry" => 37000,
    "Spike" => 32000,
    "Casper" => 50000,
    "Droopy" => 45000,
    "Mickey" => 42000
);

// a. Display all the employee details in an unordered list
echo "<h3>a. Employee Details:</h3>";
echo "<ul>";
foreach ($salaries as $name => $salary) {
    echo "<li>Salary of $name is $salary</li>";
}
echo "</ul>";

// b. Display only the Employee names
echo "<h3>b. Employee Names:</h3>";
foreach (array_keys($salaries) as $name) {
    echo "$name<br>";
}

// c. Find the total amount of salary to be paid to these employees
$totalSalary = array_sum($salaries);
echo "<h3>c. Total Salary to be Paid: </h3>";
echo "₹$totalSalary<br>";

// d. Sort and display the employee details in alphabetical order
echo "<h3>d. Employee Details (Alphabetical Order):</h3>";
ksort($salaries); // Sort by key (name)
foreach ($salaries as $name => $salary) {
    echo "$name: ₹$salary<br>";
}

// e. Sort the employees based on salary and display them
echo "<h3>e. Employee Details (Sorted by Salary):</h3>";
asort($salaries); // Sort by value (salary)
foreach ($salaries as $name => $salary) {
    echo "$name: ₹$salary<br>";
}

// f. Find the employee name who gets the highest salary
$highestSalary = max($salaries);
$highestPaidEmployee = array_search($highestSalary, $salaries);
echo "<h3>f. Highest Paid Employee:</h3>";
echo "$highestPaidEmployee with a salary of ₹$highestSalary<br>";

// g. Tabular format displaying Name, Yearly Salary, Tax %, and Tax Amount
echo "<h3>g. Tax Details (Tabular Format):</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Name</th><th>Yearly Salary</th><th>Tax %</th><th>Tax Amount</th></tr>";
foreach ($salaries as $name => $monthlySalary) {
    $yearlySalary = $monthlySalary * 12;
    $taxRate = $yearlySalary > 420000 ? 5 : 3.5;
    $taxAmount = ($yearlySalary * $taxRate) / 100;
    echo "<tr>
            <td>$name</td>
            <td>₹$yearlySalary</td>
            <td>$taxRate%</td>
            <td>₹$taxAmount</td>
          </tr>";
}
echo "</table>";
?>
