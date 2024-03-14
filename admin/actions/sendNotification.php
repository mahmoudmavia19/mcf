<?php
// insert notification into notification table title,description,date,admin_id,employee_id
include "../../action/config.php";

// Get notification details from POST request
$title = $_GET['title'];
$employee_id = $_GET['employee_id'];
// date is Now date stamp date format
$date = date('Y-m-d');

// SQL query to insert notification into the database
$sql = "INSERT INTO notification (title, date, admin_id, employee_id) VALUES ('$title', '$date', '1', '$employee_id')";

if ($conn->query($sql) === TRUE) {
    // return employee_id
    header('Location: ../BorrowerHistory.php?status=success&message=Notification+sent+successfully&employee_id='.$employee_id);
} else {
    header('Location: ../BorrowerHistory.php?status=error&message=Error+sending+notification&employee_id='.$employee_id);
}

// Close database connection
$conn->close();



