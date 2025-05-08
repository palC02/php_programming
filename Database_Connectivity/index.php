<?php include 'db.php'; ?>


<html>
<head>
     <title>Payroll System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Employee Payroll Management</h2>
    <form action="insert.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" step="0.01" required><br>

        <label for="department">Department:</label>
        <input type="text" name="department" required><br>

        <button type="submit">Add Employee</button>
    </form>

    <br>
    <a href="display.php">View Employee Records</a>
</body>
</html>