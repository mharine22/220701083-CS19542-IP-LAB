<?php
// This is the PHP file, though no server-side logic is handled here yet.
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"], input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Retrieve Employee Details</h2>
    <form action="employee.php" method="POST">
        <label for="empid">Enter Employee ID:</label>
        <input type="number" name="empid" required>
        <input type="submit" name="retrieve" value="Retrieve">
    </form>

    <h2>Update Employee Details</h2>
    <form action="employee.php" method="POST">
        <label for="empid">Enter Employee ID:</label>
        <input type="number" name="empid" required>
        
        <label for="ename">Enter Name:</label>
        <input type="text" name="ename" required>
        
        <label for="desig">Enter Designation:</label>
        <input type="text" name="desig" required>
        
        <label for="dept">Enter Department:</label>
        <input type="text" name="dept" required>
        
        <label for="doj">Enter Date of Joining (YYYY-MM-DD):</label>
<input type="date" name="doj" required>

        
        <label for="salary">Enter New Salary:</label>
        <input type="number" name="salary" step="0.01" required>
        
        <input type="submit" name="update" value="Update Employee">
    </form>

</body>
</html>
