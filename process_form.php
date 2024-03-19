<?php

include'process_form.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO your_table_name (email, first_name, last_name, password) VALUES (?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("ssss", $email, $first_name, $last_name, $password);

// Loop through each set of input fields
for ($i = 0; $i < count($_POST['email_addr']); $i++) {
    // Set parameters and execute statement
    $email = $_POST['email_addr'][$i];
    $first_name = $_POST['first_name'][$i];
    $last_name = $_POST['last_name'][$i];
    $password = $_POST['password_field'][$i]; // Remember to hash the password before storing it in the database for security reasons
    $stmt->execute();
}

// Close statement and connection
$stmt->close();
$conn->close();

// Redirect to a success page
header("Location: success.php");
exit();
?>
