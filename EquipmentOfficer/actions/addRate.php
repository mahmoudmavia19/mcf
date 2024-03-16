<?php
include "../../action/config.php";
// add or update rate using request id
$request_id = $_GET['id'];
$rate = $_GET['rate'];
$note = $_GET['note'];

// check if rate already exists
$sql = "SELECT * FROM rate WHERE request_id = $request_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // update rate
    $sql = "UPDATE rate SET number = $rate, note = '$note' WHERE request_id = $request_id";
} else {
    // add new rate
    $sql = "INSERT INTO rate (request_id, number, note) VALUES ($request_id, $rate, '$note')";
}

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("location: ../CompletedRequests.php?message=Rate Added Successfully");
} else {
    echo "Error updating record: " . $conn->error;
    header("location: ../CompletedRequests.php?message=Error Adding Rate");
}

