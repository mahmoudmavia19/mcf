<?php
include "../../action/config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department_id = $_POST['department_id'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $isEquipmentOfficer = isset($_POST['role']) ? 1 : 0; // Check if the checkbox is checked


    // Validate form data

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../AddEmployee.php?status=invalid_email");
        exit();
    }

    // Check if password meets minimum length requirement
    if (strlen($password) < 8) {
        header("Location: ../AddEmployee.php?status=password_too_short");
        exit();
    }

    // Check if phone number starts with '05' and has a length of 10
    if (substr($phone, 0, 2) !== '05' || strlen($phone) !== 10) {
        header("Location: ../AddEmployee.php?status=invalid_phone");
        exit();
    }

    // Check if passwords match
    if ($password !== $cpassword) {
        header("Location: ../AddEmployee.php?status=password_mismatch");
        exit();
    }

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement
    $tableName = $isEquipmentOfficer ? "equipment_officer" : "employee";


    $sql = "INSERT INTO $tableName (name, email, phone, department_id, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssis", $name, $email, $phone, $department_id, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
        // Employee added successfully
        // Redirect to a success page or handle it as per your requirement
        header("Location: ../AddEmployee.php?status=success");
        exit();
    } else {
        // Error adding employee
        // Redirect with error message or handle it as per your requirement
        header("Location: ../AddEmployee.php?status=database_error");
        exit();
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
