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

//Delete some somes
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $delete=mysqli_query($conn,"DELETE FROM `accounting` WHERE `id`='$id' ");
}

// Retrieve data from the database
$sql = "SELECT * FROM accounting";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Accounting Department Data</title>
  <style>
    /* Custom styling for the retrieved form data */

    * {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-image: url(bg-img.jpg);
      background-size: cover;
    }

    h2 {
      color: #FCA311;
    }

    .form-data {
      background-color: #f5f5f5;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-data p {
      margin: 0;
    }

    hr {
      margin: 20px 0;
      border: 0;
      border-top: 1px solid #ccc;
    }

    .btn {
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

    .delbtn {
      display: inline-block;
      padding: 10px 20px;
      background-color: darkred;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      margin-top: 10px;
    }

    .delbtn:hover {
      background-color: #4c55af;
    }
  </style>
</head>
<body>
  <h2>Accounting Department Data</h2>
  
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='form-data'>";
      
      echo "<p><strong>Type of Income:</strong> " . $row["TypeOfIncome"] . "</p>";
      echo "<p><strong>Type of Payment:</strong> " . $row["TypeOfPayment"] . "</p>";
      echo "<p><strong>Amount Received:</strong> " . $row["AmountReceived"] . "</p>";
      
      echo "<p><strong>Payment Date:</strong> " . $row["PaymentDate"] . "</p>";
      echo "<p><strong>Customer Name:</strong> " . $row["CustomerName"] . "</p>";
      echo "<p><strong>Transaction Date:</strong> " . $row["TransactionDate"] . "</p>";
      
      echo "<p><strong>Amount of Tax:</strong> " . $row["AmountOfTax"] . "</p>";
      echo "<p><strong>Amount of Loan:</strong> " . $row["AmountOfLoan"] . "</p>";
      echo "<p><strong>Person to Pay:</strong> " . $row["PersonToPay"] . "</p>";
      
      echo "<p><strong>Amount of Utilities to Pay:</strong> " . $row["AmountOfUtilities"] . "</p>";
      echo "<p><strong>Utility to Pay:</strong> " . $row["UtilityToPay"] . "</p>";
      
      echo "<p><strong>Gross Income:</strong> " . $row["GrossIncome"] . "</p>";
      echo "<p><strong>Total Expense:</strong> " . $row["TotalExpense"] . "</p>";
      echo "<p><strong>Net Income:</strong> " . $row["NetIncome"] . "</p>";
      
      echo "
        <a href='cyb_acc_view.php?id=". $row['id'] ."' class='delbtn'>Delete</a>
      ";

      echo "</div>";
      echo "<hr>";
    }
  } else {
    echo "<p style='color:white;'>No form data found.</p>";
  }

  // Close the connection
  $conn->close();
  
  ?>
  
  <a href="cyb_acc_new.html" class="btn">New Entry</a>
  
</body>
</html>