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
  $delete=mysqli_query($conn,"DELETE FROM `payroll` WHERE `id`='$id' ");
}


// Retrieve data from the database
$sql = "SELECT * FROM payroll";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  
  <title>Payroll Department Data</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style>
  
  @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600&family=Orbitron:wght@800&display=swap');
  
  * {
    font-family: 'IBM Plex Mono', monospace;
    
  }
    
    /* Custom styling for the retrieved form data */
    body {
      
      background-image: url(bg-img.jpg);
      background-size: cover;
      padding: 20px;
    }

    h2 {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
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

    .btn {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
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
      
    .container {
      height: auto;
      width: 100%;
      display: flex;
      flex-flow: row wrap;
      
    }
    
    h2 {
      color: #FCA311;
    }
    
    h3 {
      text-align: center;
      margin-right: 20px;
      
    }
    
    .receipt{
      background-color: #e5e5e5;
      border-radius: 20px;
      width: 290px;
      height: auto;
      border: 10px groove #331a00;
      margin: 10px 20px;
      padding-left: 15px;
      margin-top: 2%;
      box-shadow: -10px -5px #331a00;
      font-size: 15px;
      
    }
    
    .delbtn {
      display: inline-block;
      padding: 10px 20px;
      background-color: darkred;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      margin-left: 65%;
      margin-bottom: 10px;
      
    }

    .delbtn:hover {
      background-color: #4c55af;
    }
    
  </style>
</head>
<body>
  
  
  <h2>Payroll Department Data</h2>
  
  <div class='container'>
  
  <?php
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      
    $Dalsalary = $row["dalsalary"];
    $daysworked = $row["daywork"];
    $ssscont = $row["ssscontr"];
    $phlhealthcon = $row["healthcontri"];
    $pagibigCont = $row["pagibigcont"];
    $dmgtoolsfee = $row["dmgfee"];
    $cashadv = $row["cashadv"];
    $br1 = isset($row["bracket1"]) ? 100 : 0;
    $br2 = isset($row["bracket2"]) ? 200 : 0;
    $br3 = isset($row["bracket3"]) ? 50 : 0;
    
    $grossPay = $Dalsalary * $daysworked;

    $deductions = $ssscont + $phlhealthcon + $pagibigCont + $dmgtoolsfee + $cashadv;

    $bonusAmount = $br1 + $br2 + $br3;

    $netPay = $grossPay - $deductions + $bonusAmount;
    
      echo "
        <div class='receipt'>
          
          <h3> I.D: #". $row["id"] ." </h3>
           <p> 
            <strong>Employee Information</strong><br>
            Employee Name : ". $row["empid"] ." <br>
            Employee Number : ". $row["empno"] ." <br>
            Department : ". $row["depart"] ." 
              <br>
            Mode of Payment : ". $row["modpayment"] ." <br><br>
            <strong>Salary Information</strong><br>
            Daily Salary : ". $row["dalsalary"] ."<br>
            Days Worked : ". $row["daywork"] ."<br>
            Gross Pay : ". $grossPay ."
              <br><br>
            <strong>Deduction</strong>
              <br>
            SSS Contribution : ". $row["ssscontr"] ."<br>
            Philhealth Contribution : ". $row["healthcontri"] ."<br>
            Pag-ibig Contribution : ". $row["pagibigcont"] ."<br>
            Damage Tools Fee : ". $row["dmgfee"] ."<br>
            Cash Advance : ". $row["cashadv"] ."<br>
            Total Deduction : ". $deductions ."<br><br>
            <strong>Bonuses</strong><br>
            Christmas Bonus : ". $row["bracket1"] ."<br>
            13th Month Pay : ". $row["bracket2"] ."
              <br>
            Holiday Pay : ". $row["bracket3"] ."
              <br>
            Total Bonuses : ". $bonusAmount ."<br><br>
            Net Pay : ". $netPay ."<br>
          </p>
          <a href='view_payroll.php?id=". $row['id'] ."' class='delbtn'>Delete</a>
        </div>
      
      ";
      
      
    }
  } else {
    echo "<p style='color:white;'>No form data found.</p>";
  }

  // Close the connection
  $conn->close();
  
  ?>
  
  </div>
  <br>
  <a href="payrollfront.html" class="btn">New Entry</a>
  
</body>
</html>