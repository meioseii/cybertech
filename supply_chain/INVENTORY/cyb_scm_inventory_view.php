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
  $delete=mysqli_query($conn,"DELETE FROM `INVENTORY` WHERE `id`='$id' ");
}

// Retrieve data from the database
$sql = "SELECT * FROM INVENTORY";
$result = $conn->query($sql);

?>

<HTML>
  <head>
    <TITLE>Form Output</TITLE>
    
    <link rel="stylesheet" type="text/css" href="cyb_scm_inventory_table.css">

  </head>
  <BODY>
    
    <div class='container-one'>
    <table border='1'>
        
          <th colspan="8"> Inventory </th>
        
        <tr>
          <th>ID</th>
          <th>Classification</th>
          <th>Brand</th>
          <th>Item Name</th>
          <th>Units</th>
          <th>Stocks</th>
          <th>Item Cost/pc</th>
          <th> Action </th>
        </tr>
<?php
    
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  
    echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['Classification'] . "</td>";
        echo "<td>" . $row['Brand'] . "</td>";
        echo "<td>" . $row['Item_Name'] . "</td>";
        
        echo "<td>" . ($row['Units']) . "</td>";
        echo "<td>" . ($row['Stocks']) . "</td>";
        echo "<td>" . ($row['ItemCost_pc']) . "</td>";
        
    echo "<td> 
        <a href='cyb_scm_inventory_view.php?id=". $row['id'] ."' class='delbutton' > Delete </a> </td>";
        echo "</tr>";
          
      }
	  } 
		else {
          echo "<tr><td colspan='8'>No DATA Stored in Database.</td> </tr>";
         }
    
    
  ?>
  
      </table>

        <br> <br>
        </div>
        
        <div class="container-three">
          <a href='cyb_scm_inventory_new.html' class="btn">ADD ITEM</a>
          </div>
          
 </BODY>
</HTML>