<?php
include 'record_db.php';

// Fetch all students
$sql = "SELECT * FROM SCORESHEET";
$result = $conn->query($sql);

// Fetch topper
$topperResult = $conn->query("SELECT * FROM SCORESHEET ORDER BY total DESC LIMIT 1");
$topper = $topperResult->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            margin: auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }
        h2, h3 {
            text-align: center;
        }
        .topper {
            background-color: #d1e7dd;
            width: 60%;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #198754;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <h2>Student Records</h2>

    <table>
        <tr>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Theory Paper 1</th>
            <th>Theory Paper 2</th>
            <th>Theory Paper 3</th>
            <th>Theory Paper 4</th>
            <th>Practical Paper 1</th>
            <th>Practical Paper 2</th>
            <th>Total</th>
            <th>Average</th>
            <th>Division</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['t1']; ?></td>
                <td><?php echo $row['t2']; ?></td>
                <td><?php echo $row['t3']; ?></td>
                <td><?php echo $row['t4']; ?></td>
                <td><?php echo $row['p1']; ?></td>
                <td><?php echo $row['p2']; ?></td>
                <td><?php echo $row['total']; ?></td>
                <td><?php echo $row['average']; ?></td>
                <td><?php echo $row['division']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <div class="topper">
        <h3>Top Scoring Student</h3>
        <p>
            <strong>Roll:</strong> <?php echo $topper['id']; ?><br>
            <strong>Name:</strong> <?php echo $topper['name']; ?><br>
            <strong>Total:</strong> <?php echo $topper['total']; ?><br>
            <strong>Division:</strong> <?php echo $topper['division']; ?>
        </p>
    </div>

    <div style="text-align: center;">
        <a href="index.php">Add New Student</a>
    </div>

</body>
</html>

<?php $conn->close(); ?>
