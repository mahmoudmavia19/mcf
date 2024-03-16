<?php
include "../../action/config.php";
// add equipment to database
session_start();
$name = $_POST['name'];
$equipment_id = $_POST['equipment_id'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$officer_id = $_SESSION['id'];
$availability = $_POST['availability'];

try {
    $sql = "INSERT INTO equipment (name, equipment_id, description, quantity, officer_id, availability) VALUES ('$name', '$equipment_id', '$description', '$quantity', '$officer_id', '$availability')";
// execute query
    if ($conn->query($sql) === TRUE) {
        echo "Equipment added successfully";
        header("Location: ../equipmentAdd.php?message=Equipment added successfully");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    header("Location: ../equipmentAdd.php?message=Error adding equipment");
}
