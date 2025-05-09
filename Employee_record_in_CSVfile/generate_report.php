<?php
$inputFile = "yourroll.csv";
$outputFile = "report.csv";

if (!file_exists($inputFile)) {
    die("Input file not found.");
}

$input = fopen($inputFile, "r");
$output = fopen($outputFile, "w");

// Add header row in report.csv
fputcsv($output, ["Emp Code", "Name", "Basic", "DA", "HRA", "Medical", "Gross", "PF", "Net"]);

// Process each record and calculate salary details
while (($data = fgetcsv($input)) !== FALSE) {
    list($ec, $name, $basic) = $data;

    $da = $basic * 0.30;  // DA: 30% of Basic
    $hra = $basic * 0.15;  // HRA: 15% of Basic
    $medical = 500;        // Fixed Medical Expense
    $gross = $basic + $da + $hra + $medical;
    $pf = ($basic + $da) * 0.12;  // PF: 12% of (Basic + DA)
    $net = $gross - $pf;

    fputcsv($output, [$ec, $name, $basic, $da, $hra, $medical, $gross, $pf, $net]);
}

fclose($input);
fclose($output);

echo "Report generated successfully.<br><a href='view_report.php'>View Report</a>";
?>
