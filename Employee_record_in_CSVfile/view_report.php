<?php
$reportFile = "report.csv";

if (!file_exists($reportFile)) {
    die("Report file not found.");
}

$file = fopen($reportFile, "r");
$rows = [];

// Read data from report.csv
while (($data = fgetcsv($file)) !== FALSE) {
    $rows[] = $data;
}
fclose($file);

echo "<h2>Salary Report</h2>";
echo "<table border='1' cellpadding='8'>";

// Display table header
foreach ($rows[0] as $header) {
    echo "<th>$header</th>";
}
echo "</tr>";

// Display each record
for ($i = 1; $i < count($rows); $i++) {
    echo "<tr>";
    foreach ($rows[$i] as $col) {
        echo "<td>$col</td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "<br>Total Records: " . (count($rows) - 1);
?>
