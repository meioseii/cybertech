<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "cybertech_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Delete some somes
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $delete=mysqli_query($conn,"DELETE FROM `human_resource` WHERE `id`='$id' ");
}

$sql = "SELECT * FROM human_resource";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Human Resource Department Data</title>
  
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

  <h2>Human Resource Data</h2>

<?php
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<div class='form-data'>";
    
    echo "<p><strong>ID : </strong> " . $row["id"] . "</p>";
    
    echo "<p><strong>Surname:</strong> " . $row["surname"] . "</p>";
    echo "<p><strong>Firstname:</strong> " . $row["firstname"] . "</p>";
    echo "<p><strong>Middlename:</strong> " . $row["middlename"] . "</p>";
    
    echo "<p><strong>Birthday:</strong> " . $row["birthday"] . "</p>";
    echo "<p><strong>Birthplace:</strong> " . $row["birthplace"] . "</p>";
    echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
    
    echo "<p><strong>Contact:</strong> " . $row["contact"] . "</p>";
    echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
    echo "<p><strong>Social Media:</strong> " . $row["socialMedia"] . "</p>";
    
    echo "<p><strong>Civil Status:</strong> " . $row["civilStatus"] . "</p>";
    echo "<p><strong>Educational Background:</strong> " . $row["educBackground"] . "</p>";
    echo "<p><strong>Educational Attainment:</strong> " . $row["educAttainment"] . "</p>";
    
    echo "<p><strong>Language:</strong> " . $row["language"] . "</p>";
    echo "<p><strong>Religion:</strong> " . $row["religion"] . "</p>";
    echo "<p><strong>Job Experience:</strong> " . $row["jobExperience"] . "</p>";
    echo "<p><strong>Home Address:</strong> " . $row["homeAddress"] . "</p>";
    
    echo "
        <a href='cyb_hrd_view.php?id=". $row['id'] ."' class='delbtn'>Delete</a>
      ";
      
    echo "</div>";
    echo "<hr>";
  }
} else {
    echo "<p style='color:white;;'>No form data found.</p>";
}

$conn->close();
?>

<a href="cyb_hrd_new.html" class="btn">New Entry</a>

</body>
</html>