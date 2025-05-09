<?php
include 'record_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];

    $total = $t1 + $t2 + $t3 + $t4 + $p1 + $p2;
    $average = $total / 6;

    if ($average >= 60) {
        $division = "1st";
    } elseif ($average >= 45) {
        $division = "2nd";
    } elseif ($average >= 40) {
        $division = "3rd";
    } else {
        $division = "NOT QUALIFIED";
    }

    $sql = "INSERT INTO SCORESHEET (id, name, t1, t2, t3, t4, p1, p2, total, average, division)
            VALUES ('$id', '$name', '$t1', '$t2', '$t3', '$t4', '$p1', '$p2', '$total', '$average', '$division')";

    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully. <a href='display.php'>View Records</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>