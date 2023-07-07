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
$incomeType = $_POST['income'];
$paymentType = $_POST['payment'];
$amountReceived = $_POST['amount'];

$payDate = $_POST['paydate'];
$customername = $_POST['fullname'];
$transDate = $_POST['transdate'];

$taxAmount = $_POST['taxAmount'];
$loanAmount = $_POST['loanAmount'];
$persontopay = $_POST['paymentPerson'];

$utilityAmount = $_POST['utilityAmount'];
$payUtility = $_POST['payUtility'];
$grossIncome = $_POST['grossIncome'];

$totalExpense = $_POST['totalExpense'];
$netIncome = $_POST['netIncome'];

// Prepare the INSERT statement
$sql = "INSERT INTO accounting (TypeOfIncome, TypeOfPayment, AmountReceived, PaymentDate, CustomerName, TransactionDate, AmountOfTax, AmountOfLoan, PersonToPay, AmountOfUtilities, UtilityToPay, GrossIncome, TotalExpense, NetIncome) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt -> bind_param ("ssssssssssssss", $incomeType, $paymentType, $amountReceived, $payDate, $customername, $transDate, $taxAmount, $loanAmount, $persontopay, $utilityAmount, $payUtility, $grossIncome, $totalExpense, $netIncome);

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