<?php

require './config/function.php';

if (isset($_POST['book'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $message = $_POST['message'];

    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO appointment (name,email, phone, category, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $phone, $category, $message);
    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($result) {
        redirect('success.php','Message sent successfully!');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
