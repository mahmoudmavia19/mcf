<?php

include "../../action/config.php";
$equipment_id = $_GET['equipment_id'];
$quantity = $_GET['quantity'];
$sql = "UPDATE equipment SET quantity = '$quantity' WHERE equipment_id = '$equipment_id'";
// execute query
if ($conn->query($sql) === TRUE) {
    echo "Quantity updated successfully";
    header("Location: ../index.php?message=Quantity+updated+successfully");
} else {
    echo "Error updating quantity: " . $conn->error;
    header('location: ../index.php?message=Error+updating+quantity');
}