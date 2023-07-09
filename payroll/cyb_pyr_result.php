<!DOCTYPE html>
<html>
<head>
  
  <title>Payroll Receipt</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style>
  
    * {
      box-sizing: border-box;
    }
    
    
    @font-face {
      font-family: 'Straphanger';
      src: url('Straphanger.ttf.woff') format('woff'),
        url('Straphanger.ttf.svg#Straphanger') format('svg'),
        url('Straphanger.ttf.eot'),
        url('Straphanger.ttf.eot?#iefix') format('embedded-opentype'); 
        font-weight: normal;
        font-style: normal;
    }

    body {
      font-family: Arial, sans-serif;
      background-image: url(bg-img.jpg);
      background-size: cover;
      margin: 0;
    }

    .main-container {
      height: 100vh;
      width: 100%;
      
    }
    
    .container-one {
      max-width: 380px;
      height: auto;
      margin: 0 auto;
    }
    
    .receipt{
      background-color: #e5e5e5;
      border-radius: 20px;
      width: 370px;
      height: auto;
      border: 2px dashed black;
      margin: 0 auto;
      padding-left: 15px;
      margin-top: 5%;
      box-shadow: 5px 5px grey;
      
    }
    
    p{
      font-family: Straphanger, Sans-Serif;
      font-weight: 20px;
    }
    
    .btn {
      display: inline-block;
      margin-left: 50px;
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
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "cybertech_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $employname = $_POST['employee-name'];
    $empno = $_POST['employeeno'];
    $Depart = $_POST['department'];
    $modpayment = $_POST['mode_of_payment'];
    $Dalsalary = $_POST['dailysalary'];
    $ssscont = $_POST['sss_contribution'];
    $daysworked = $_POST['daysworked'];
    $phlhealthcon = $_POST['philhealth'];
    $Numbofhours = $_POST['noofothours'];
    $pagibigCont = $_POST['pagibig'];
    $br1 = isset($_POST['br1']) ? 100 : 0; // Christmas Bonus fixed amount
    $br2 = isset($_POST['br2']) ? 200 : 0; // 13th Month Pay fixed amount
    $br3 = isset($_POST['br3']) ? 50 : 0; // Birthday Bonus fixed amount
    $dmgtoolsfee = $_POST['damagetoolsfee'];
    $cashadv = $_POST['cashadvance'];

    $grossPay = $Dalsalary * $daysworked;

    $deductions = $ssscont + $phlhealthcon + $pagibigCont + $dmgtoolsfee + $cashadv;

    $bonusAmount = $br1 + $br2 + $br3;

    $netPay = $grossPay - $deductions + $bonusAmount;

    $sql = "INSERT INTO payroll (empid, empno, depart, modpayment, dalsalary, ssscontr, daywork, healthcontri, othours, pagibigcont, bracket1, bracket2, bracket3, dmgfee, cashadv, grosspay, netpay)
        VALUES ('$employname', '$empno', '$Depart', '$modpayment', $Dalsalary, $ssscont, $daysworked, $phlhealthcon, $Numbofhours, $pagibigCont, '$br1', '$br2', '$br3',$dmgtoolsfee, $cashadv, $grossPay, $netPay)";

    if ($conn->query($sql) === TRUE) {
        // Generate the Receipt
      echo "
      <div class='main-container'>
       <div class='container-one'>
        <div class='receipt'>
          <p>
            <strong>Employee Information</strong><br>
            Employee Name : ". $employname ." <br>
            Employee Number : ". $empno ." <br>
            Department : ". $Depart ." 
              <br>
            Mode of Payment : ". $modpayment ." <br><br>
            <strong>Salary Information</strong><br>
            Daily Salary : ". $Dalsalary ."<br>
            Days Worked : ". $daysworked ."<br>
            Gross Pay : ". $grossPay ."
              <br><br>
            <strong>Deduction</strong>
              <br>
            SSS Contribution : ". $ssscont ."<br>
            Philhealth Contribution : ". $phlhealthcon ."<br>
            Pag-ibig Contribution : ". $pagibigCont ."<br>
            Damage Tools Fee : ". $dmgtoolsfee ."<br>
            Cash Advance : ". $cashadv ."<br>
            Total Dedection : ". $deductions ."<br><br>
            <strong>Bonuses</strong><br>
            Christmas Bonus : ". $br1 ."<br>
            13th Month Pay : ". $br2 ."
              <br>
            Holiday Pay : ". $br3 ."
              <br>
            Total Bonuses : ". $bonusAmount ."<br><br>
            Net Pay : ". $netPay ."<br>
          </p>
        </div>
        
        <br>
        <a href='cyb_pyr_new.html' class='btn'>New Entry</a>
        <a href='cyb_pyr_view.php' class='btn'>View Entries</a>
        
       </div>
      </div>
      
      ";

    } else {
        echo "Error inserting data: " . $conn->error;
    }

    $conn->close();
}

?>

  </body>
</html>
