<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    $department = $_POST['department'];

    $sql = "INSERT INTO employees (name, email, salary, department) VALUES ('$name', '$email', '$salary', '$department')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee added successfully. <a href='display.php'>View Employees</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();