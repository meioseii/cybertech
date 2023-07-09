<!DOCTYPE html>
<html>
<head>
  <title>Marketing Form Submission Result</title>
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
    if (isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['product']) && isset($_POST['payment']) && isset($_POST['paying']) && isset($_POST['street']) && isset($_POST['postal']) && isset($_POST['region'])) {
      include 'cyb_mkt_data.php';
      $fname = $_POST['fname'];
      $mname = $_POST['mname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $product = $_POST['product'];
      $payment = $_POST['payment'];
      $paying = $_POST['paying'];
      $street = $_POST['street'];
      $postal = $_POST['postal'];
      $region = $_POST['region'];
      echo "<p><strong>First Name:</strong> " . $fname . "</p>";
      echo "<p><strong>Middle Name:</strong> " . $mname . "</p>";
      echo "<p><strong>Last Name:</strong> " . $lname . "</p>";
      echo "<p><strong>Email:</strong> " . $email . "</p>";
      echo "<p><strong>Product Ordered:</strong> " . $product . "</p>";
      echo "<p><strong>Type of Payment:</strong> " . $payment . "</p>";
      echo "<p><strong>Date of Paying:</strong> " . $paying . "</p>";
      echo "<p><strong>Street/House number:</strong> " . $street . "</p>";
      echo "<p><strong>Zip/Postal:</strong> " . $postal . "</p>";
      echo "<p><strong>Region:</strong> " . $region . "</p>";
    } else {
      echo "<p>No form data submitted.</p>";
    }
    ?>
  <a href="cyb_mkt_new.html" class="btn">Go Back</a>
  <a href="cyb_mkt_view.php" class="btn">View Entries</a>
  
</div>
</body>
</html>