<?php
include "../../action/config.php";
// Get department details from POST request
$name = $_POST['name'];
$description = $_POST['description'];

// SQL query to insert department into the database
$sql = "INSERT INTO department (name, description, create_time) VALUES ('$name', '$description', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Department added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
// navigate to showDepartments.php
header("Location: ../DepartmentManagement.php");
exit();
?>
