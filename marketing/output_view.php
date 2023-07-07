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
  $delete=mysqli_query($conn,"DELETE FROM `marketing` WHERE `id`='$id' ");
}

// Retrieve data from the database
$sql = "SELECT * FROM marketing";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Marketing Department Data</title>
  <style>
    /* Custom styling for the retrieved form data */

    * {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-image: url(bg-img.jpg);
      
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
  <h2>Marketing Department Data</h2>
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<div class='form-data'>";
      echo "<p><strong>First Name:</strong> " . $row["fname"] . "</p>";
      echo "<p><strong>Middle Name:</strong> " . $row["mname"] . "</p>";
      echo "<p><strong>Last Name:</strong> " . $row["lname"] . "</p>";
      echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
      echo "<p><strong>Product:</strong> " . $row["product"] . "</p>";
      echo "<p><strong>Payment Type:</strong> " . $row["payment"] . "</p>";
      echo "<p><strong>Date of Paying:</strong> " . $row["paying"] . "</p>";
      echo "<p><strong>Street:</strong> " . $row["street"] . "</p>";
      echo "<p><strong>Postal Code:</strong> " . $row["postal"] . "</p>";
      echo "<p><strong>Region:</strong> " . $row["region"] . "</p>";

      echo "
        <a href='output_view.php?id=". $row['id'] ."' class='delbtn'>Delete</a>
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
  <a href="cyb_mkt_new.html" class="btn">New Entry</a>
</body>
</html>
