<?php
// Include the database configuration file
include "../../action/config.php";


    // Retrieve the employee ID from the POST request
    $employeeId = $_GET['id'];

    // Query to fetch the current block status of the employee
    $query = "SELECT is_blocked FROM employee WHERE employee_id = ?";

    // Prepare the statement
    $stmt = $conn->prepare($query);

    // Bind parameters and execute the statement
    $stmt->bind_param("i", $employeeId);
    $stmt->execute();

    // Store the result
    $stmt->store_result();

    // Check if the employee exists
    if ($stmt->num_rows > 0) {
        // Bind the result variables
        $stmt->bind_result($blocked);

        // Fetch the result
        $stmt->fetch();

        // Toggle the block status
        $newBlockStatus = $blocked ? 0 : 1;

        // Update the block status in the database
        $updateQuery = "UPDATE employee SET is_blocked = ? WHERE employee_id = ?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param("ii", $newBlockStatus, $employeeId);

        // Execute the update statement
        if ($updateStmt->execute()) {
            // Return success response
            echo json_encode(array("status" => "success", "blocked" => $newBlockStatus));
            header('Location: ../EmployeeMangement.php?status=success&message=Employee+block+status+updated');
        } else {
            // Return error response
            echo json_encode(array("status" => "error", "message" => "Error updating block status"));
            header('Location: ../EmployeeMangement.php?status=error&message=Error+updating+block+status');
        }
    } else {
        // Return error response if employee does not exist
        echo json_encode(array("status" => "error", "message" => "Employee not found"));
        header('Location: ../EmployeeMangement.php?status=error&message=Employee+not+found');
    }

    // Close the statement
    $stmt->close();
    $updateStmt->close();

// Close the database connection
$conn->close();
?>
