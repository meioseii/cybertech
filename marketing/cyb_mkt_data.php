<?php
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$database = "cybertech_database"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$product = $_POST['product'];
$payment= $_POST['payment'];
$paying = $_POST['paying'];
$street = $_POST['street'];
$postal = $_POST['postal'];
$region = $_POST['region'];

// Prepare the INSERT statement
$sql = "INSERT INTO marketing (fname, mname, lname, email, product, payment, paying, street, postal, region) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $fname, $mname, $lname, $email, $product, $payment, $paying, $street, $postal, $region);

// Execute the statement
if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>