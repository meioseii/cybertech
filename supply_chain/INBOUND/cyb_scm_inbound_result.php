<HTML>
  <head>
    <TITLE>Supply Inbound Form Submission Result</TITLE>
    
    <link rel="stylesheet" type="text/css" href="cyb_scm_inbound_table.css">

  </head>
  <style>
	
  </style>
  <BODY>
    
    <div class='container-one'>
    
<?php

if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['contactinfo']) && isset($_POST['productTp']) && isset($_POST['productname']) && isset($_POST['quantity']) && isset($_POST['amount']) && isset($_POST['orderedBy']) && isset($_POST['paymentM']) && isset($_POST['transDate']))  {
  
  
$name = $_POST['name'];
$address = $_POST['address'];
$contactinfo = $_POST['contactinfo'];
$producttype = $_POST['productTp'];
$productname = $_POST['productname'];
$quantity = $_POST['quantity'];
$amount = $_POST['amount'];
$orderedby = $_POST['orderedBy'];
$modeofpayment = $_POST['paymentM'];
$transdate = $_POST['transDate'];
  
    echo "<table border='1'>" ;
  
    echo "<th colspan='2'> Supplier Info </th>" ;
    echo "<tr>
           <td> Supplier Name : </td>
			     <td> ". $name ." </td>
			   </tr>" ;
			   
		echo "<tr>
			     <td> Address : </td>
			     <td>". $address ."</td>
			    </tr>" ;
			    
		echo "<tr>
			     <td> Contact Info : </td>
			     <td>". $contactinfo ."</td>
			    </tr>" ;
			    
		echo "</table> <br>" ;
			    
		echo "<table border='1'>
		      <th colspan='2'> IN _ TRANSAC </th>" ;
		
		echo "<tr>
			     <td> Product Type : </td>
			     <td>". $producttype ."</td>
			    </tr>" ;
			    
		echo "<tr>
			     <td> Product Name : </td>
			     <td>". $productname ."</td>
			    </tr>" ;
			    
		echo "<tr>
			     <td> Quantity : </td>
			     <td>". $quantity ."</td>
			    </tr>" ;
			    
		echo "<tr>
			     <td> Amount : </td>
			     <td>". $amount ."</td>
			    </tr>" ;
			    
		echo "<tr>
			     <td> Ordered By : </td>
			     <td>". $orderedby ."</td>
			    </tr>" ;
			    
		echo "<tr>
			     <td> Mode of Payment : </td>
			     <td>". $modeofpayment ."</td>
			    </tr>" ;
		
		echo "<tr>
			     <td> Transaction Date : </td>
			     <td>". $transdate ."</td>
			    </tr>" ;
			    
		echo "</table>
		        
            <br>
            
            <div class='container-two'>" ;
          
          include 'cyb_scm_inbound_data.php';
          
		} 
		else {
          echo "<h1>No form data submitted.</h1>";
         }
    
  ?>

        <br> <br>
        </div>
        
        <div class="container-three">
          <a href='cyb_scm_inbound_new.html' class='btn'>Go Back</a> <br> <br>
          <a href='cyb_scm_inbound_view.php' class='btn'>View Entries</a>
        </div>
          
 </BODY>
</HTML>