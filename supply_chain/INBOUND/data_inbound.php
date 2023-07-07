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
$name = $_POST['name'];
$address = $_POST['address'];
$contactinfo = $_POST['contactinfo'];
$producttype = $_POST['productTp'];
$productname = $_POST['productname'];
$quantity = $_POST['quantity'];
$amount = $_POST['amount'];
$orderedby = $_POST['orderedBy'];
$modeofpayment = $_POST['paymentM'];
$transdate = $_POST['transDate'];

// Prepare the INSERT statement
$sql = "INSERT INTO INBOUND (SupplierName, Address, ContactInfo, ProductType, ItemName, Quantities, Amount, OrderedBy, ModeOfPayment, TransactionDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt -> bind_param ("sssssidsss", $name, $address, $contactinfo, $producttype, $productname, $quantity, $amount, $orderedby, $modeofpayment, $transdate);

// Execute the statement
if ($stmt->execute()) {
  echo "Form data saved successfully.";
}
else {
  echo "Error: ". $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();

?>