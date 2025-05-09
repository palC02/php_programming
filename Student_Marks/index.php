<?php
include 'record_db.php';
?>



<html>
    <head>
        <title>Marks</title>
    </head>
    <body>
        <form action="insert.php" method="POST">
            <label for="id">
                Roll No.
                <input name="id" type="number">
            </label>
            <label for="name">
                Name
                <input name="name" type="text">
            </label>
            <label for="t1">
                Theory Paper 1
                <input type="number" name="t1">
            </label>
             <label for="t2">
                Theory Paper 2
                <input type="number" name="t2">
            </label>
            <label for="t3">
                Theory Paper 3
                <input type="number" name="t3">
            </label>
            <label for="t4">
                Theory Paper 4
                <input type="number" name="t4">
            </label>
            <label for="p1">
                Practical Paper 1
                <input type="number" name="p1">
            </label>
            <label for="p2">
                Practical Paper 2
                <input type="number" name="p2">
            </label>
            
            <button type="submit" name="sub">Submit</button>
            <button type="reset" name="sub">Refresh</button>
        </form>
         <br>
    <a href="display.php">View Employee Records</a>
    </body>
</html>
