<!DOCTYPE html>
<html>
<head>
  <title>ADDING ITEM RESULT</title>
  
<style>
 
/* Custom styling for the form submission result page */
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
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
  padding: 10px 20px;
  background-color: #4c55af;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #45a049;
}

</style>
</head>

<body>
  
  <div class="container">
  <h1>ADDING ITEM RESULT</h1>

<?php 

// Retrieve and display form data
if (isset($_POST['classification']) && isset($_POST['brand']) && isset($_POST['itemName']) && isset($_POST['units']) && isset($_POST['stocks']) && isset($_POST['itemCost'])) {
  
  include 'cyb_scm_inventory_data.php';

  echo "<h2 id='countdown'></h2>";
  

} else {
  echo "<p>No form data submitted.</p>";
}
?>
  
</div>


    <script>
        // Set the countdown time (in seconds)
        var countdownTime = 3;

        // Function to update the countdown display
        function updateCountdown() {
            var countdownElement = document.getElementById("countdown");
            countdownElement.innerHTML = "Redirecting in " + countdownTime + " seconds...";

            // Decrease the countdown time
            countdownTime--;

            // Check if countdown is finished
            if (countdownTime < 0) {
                // Redirect to another webpage
                window.location.href = "cyb_scm_inventory_view.php";
            } else {
                // Call this function again after 1 second
                setTimeout(updateCountdown, 500);
            }
        }

        // Start the countdown
        updateCountdown();
    </script>

</body>
</html>