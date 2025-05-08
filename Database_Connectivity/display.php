<?php
include 'db.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<html>
<head>
     <title>Employee Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Employee Records</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Department</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><?php echo $row['department']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <br>
    <a href="index.php">Add New Employee</a>
</body>
</html>

<?php $conn->close(); ?>