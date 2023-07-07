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
$shipmentID = $_POST['shipmentID'];
$product = $_POST['productTp'];
$itemName = $_POST['productname'];

$quantity = $_POST['quantity'];
$customerName = $_POST['customerName'];
$transMode = $_POST['transMode'];

$destination = $_POST['destination'];
$deliveryDate = $_POST['deliveryDate'];
$notes = $_POST['notes'];

// Prepare the INSERT statement
$sql = "INSERT INTO OUTBOUND (Shipment_ID, Product, Item_Name, Quantity, Customer_Name, Transport_Mode, Destination, Delivery_Date, Notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt -> bind_param ("ississsss", $shipmentID, $product, $itemName, $quantity, $customerName, $transMode, $destination, $deliveryDate, $notes);

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