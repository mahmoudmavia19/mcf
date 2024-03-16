<?php
include "../../action/config.php";
// update request status to 0 or 1
$request_id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE requests SET status = $status WHERE request_id = $request_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    if($status == 0){
        header("location: ../requests.php?message=Request Accepted");
    } else {
        header("location: ../requests.php?message=Request Rejected");
    }
} else {
    echo "Error updating record: " . $conn->error;
    header("location: ../requests.php?message=Error Accepting Request");
}

