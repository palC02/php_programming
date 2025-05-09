<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST data
    $ec = $_POST['ec'];
    $name = $_POST['name'];
    $basic = $_POST['basic'];

    // File to store employee data
    $filename = "yourroll.csv";  // Replace 'yourroll' with your roll number

    // Open file and append data
    $file = fopen($filename, "a");
    fputcsv($file, [$ec, $name, $basic]);
    fclose($file);

    echo "Employee data saved successfully.<br><a href='employee_form.html'>Add More</a> | <a href='generate_report.php'>Generate Report</a>";
}
?>
