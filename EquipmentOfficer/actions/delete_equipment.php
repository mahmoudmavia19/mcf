<?php
include "../../action/config.php";
// delete equipment from database
$equipment_id = $_GET['id'];
$sql = "DELETE FROM equipment WHERE equipment_id = $equipment_id";
try {
if ($conn->query($sql) === TRUE) {
    echo "Equipment deleted successfully";
    header("Location: ../index.php?message=Equipment deleted successfully");
} else {
    echo "Error deleting equipment: " . $conn->error;
    header("Location: ../index.php?message=Error deleting equipment: " . $conn->error);
}
} catch (Exception $e) {
    echo "Error deleting equipment: " . $e->getMessage();
    header("Location: ../index.php?message=Error deleting equipment");
}
?>
