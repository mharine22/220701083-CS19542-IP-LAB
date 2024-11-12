<?php
// Include the database connection file
include 'access.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empid = $_POST['empid'];

    // Retrieve employee details
    if (isset($_POST['retrieve'])) {
        $sql = "SELECT * FROM empdetails WHERE empid = $empid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $employee = $result->fetch_assoc();
            echo "<h2>Employee Details</h2>";
            echo "Employee ID: " . $employee['empid'] . "<br>";
            echo "Name: " . $employee['ename'] . "<br>";
            echo "Designation: " . $employee['desig'] . "<br>";
            echo "Department: " . $employee['dept'] . "<br>";
            echo "Date of Joining: " . $employee['doj'] . "<br>";
            echo "Salary: " . $employee['salary'] . "<br>";
        } else {
            echo "No employee found with ID: $empid";
        }

    // Update employee details
    } elseif (isset($_POST['update'])) {
        $ename = $_POST['ename'];
        $desig = $_POST['desig'];
        $dept = $_POST['dept'];
        $doj = $_POST['doj']; // Ensure this is in the correct format (YYYY-MM-DD)
        $salary = $_POST['salary'];
        
        $sql = "UPDATE empdetails SET ename = '$ename', desig = '$desig', dept = '$dept', doj = '$doj', salary = $salary WHERE empid = $empid";

        if ($conn->query($sql) === TRUE) {
            echo "Employee details updated successfully for ID: $empid";
        } else {
            echo "Error updating employee details: " . $conn->error;
        }
    }
}


?>

<!-- Back Button -->
<a href="index.php"><button>Back</button></a>

<?php
$conn->close();
?>
