<!DOCTYPE html>
<html>
<head>
  <title>Accounting Form Submission Result</title>
  
<style>
 
/* Custom styling for the form submission result page */
body {
  font-family: Arial, sans-serif;
  background-image: url(bg-img.jpg);
  background-size: cover;
  margin: 0;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
  color: #333;
  margin-top: 0;
}

p {
  margin-bottom: 10px;
}

.btn {
  display: inline-block;
  text-shadow: none; 
  width: auto;
  text-decoration: none;
  padding: 10px 20px;
  background-color: #FCA311;
  color: #14213d;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.6s ease;
}

.btn:hover {
  background-color: #ED820E;
}

</style>
</head>

<body>
  
  <div class="container">
  <h2>Form Submission Result</h2>

<?php 

// Retrieve and display form data
if (isset($_POST['income']) && isset($_POST['payment']) && isset($_POST['amount']) && isset($_POST['taxAmount']) && isset($_POST['loanAmount']) && isset($_POST['paymentPerson']) && isset($_POST['utilityAmount']) && isset($_POST['payUtility']) && isset($_POST['grossIncome']) && isset($_POST['totalExpense']) && isset($_POST['netIncome'])) {

            
  include 'cyb_acc_data.php';

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


  echo "<p><strong>Type of Income: </strong> " . $incomeType . "<p>";
  echo "<p><strong>Type of Payment:</strong> " . $paymentType . "<p>";
  echo "<p><strong>Amount Received:</strong> " . $amountReceived . "<p>";
  
  echo "<p><strong>Payment Date: </strong> " . $payDate . "<p>";
  echo "<p><strong>Customer Name:</strong> " . $customername . "<p>";
  echo "<p><strong>Transaction Date:</strong> " . $transDate . "<p>";
  
  echo "<p><strong>Amount Of Tax: </strong> " . $taxAmount . "<p>";
  echo "<p><strong>Amount of Loan:</strong> " . $loanAmount . "<p>";
  echo "<p><strong>Person to Pay:</strong> " . $persontopay . "<p>";
  
  echo "<p><strong>Amount of Utilities: </strong> " . $utilityAmount . "<p>";
  echo "<p><strong>Utility to Pay:</strong> " . $payUtility . "<p>";
  echo "<p><strong>Gross Income:</strong> " . $grossIncome . "<p>";
  
  echo "<p><strong>Total Expense: </strong> " . $totalExpense . "<p>";
  echo "<p><strong>Net Income:</strong> " . $netIncome . "<p>";

  } else {
    echo "<p>No form data submitted.</p>";
  }
  
  ?>

  <a href="cyb_acc_new.html" class="btn">Go Back</a>
  
  <a href="cyb_acc_view.php" class="btn">View Entries</a>
  
</div>
</body>
</html>