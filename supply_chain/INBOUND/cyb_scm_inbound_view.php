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
  $delete=mysqli_query($conn,"DELETE FROM `INBOUND` WHERE `id`='$id' ");
}

// Retrieve data from the database
$sql = "SELECT * FROM INBOUND";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Inbound Database</title>
  <style>
    /* Custom styling for the retrieved form data */
    body {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
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
    
    .delbtn {
      display: inline-block;
      padding: 10px 20px;
      background-color: darkred;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .delbtn:hover {
      background-color: #4c55af;
    }
    
  </style>
</head>
<body>
  <h2>Inbound Database</h2>
  
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='form-data'>";
      
      echo "<p><strong> ID : </strong> " . $row["id"] . "</p>";
      
      echo "<p><strong>Supplier Name:</strong> " . $row["SupplierName"] . "</p>";
      echo "<p><strong>Address:</strong> " . $row["Address"] . "</p>";
      echo "<p><strong>Contact Info:</strong> " . $row["ContactInfo"] . "</p>";
      
      echo "<p><strong>Product Type:</strong> " . $row["ProductType"] . "</p>";
      echo "<p><strong>Item:</strong> " . $row["ItemName"] . "</p>";
      echo "<p><strong>Quantity:</strong> " . $row["Quantities"] . "</p>";
      
      echo "<p><strong>Amount:</strong> " . $row["Amount"] . "</p>";
      echo "<p><strong>Ordered By:</strong> " . $row["OrderedBy"] . "</p>";
      echo "<p><strong>Mode of Payment:</strong> " . $row["ModeOfPayment"] . "</p>";
      
      echo "<p><strong>Transaction Date:</strong> " . $row["TransactionDate"] . "</p> <br>";
      
      echo "
        <a href='cyb_scm_inbound_view.php?id=". $row['id'] ."' class='delbtn'>Delete</a>
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
  
  <a href="../index.html" class="btn">New Entry</a>
  
</body>
</html>