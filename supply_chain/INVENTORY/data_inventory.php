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
$classification = $_POST['classification'];
$brand = $_POST['brand'];
$itemName = $_POST['itemName'];
$units = $_POST['units'];
$stocks = $_POST['stocks'];
$itemCost = $_POST['itemCost'];

// Prepare the INSERT statement
$sql = "INSERT INTO INVENTORY (Classification, Brand, Item_Name, Units, Stocks, ItemCost_pc) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt -> bind_param ("ssssid", $classification, $brand, $itemName, $units, $stocks, $itemCost);

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