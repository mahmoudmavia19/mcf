<?php
include "../../action/config.php";

// Check if department ID is provided in the GET request
if(isset($_GET['id'])) {
    // Get department ID from the GET request
    $departmentId = $_GET['id'];

    // SQL query to delete department from the database
    $sql = "DELETE FROM department WHERE id = $departmentId";

    // Execute the SQL query
    try{
    if ($conn->query($sql) === TRUE) {
        // Department deleted successfully
        header('Location: ../DepartmentManagement.php?status=success&message=Department+deleted+successfully');
    } else {
        // Error deleting department
        header('Location: ../DepartmentManagement.php?status=error&message=Error+deleting+department');
    }
    } catch (Exception $e) {
        // Error deleting department
        header('Location: ../DepartmentManagement.php?status=error&message=Error+deleting+department');
    }
} else {
    // Department ID not provided in the GET request
    header('Location: ../DepartmentManagement.php?status=error&message=Department+ID+not+provided');
}

// Close connection
$conn->close();
?>
