<!DOCTYPE html>
<html>
<head>
  <title>Human Resource Form Submission Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
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
if (isset($_POST['surname']) && isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['birthday']) && isset($_POST['birthplace']) && isset($_POST['gender']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['socialMedia']) && isset($_POST['civilStatus']) && isset($_POST['educBackground']) && isset($_POST['educAttainment']) && isset($_POST['language']) && isset($_POST['religion']) && isset($_POST['jobExperience']) && isset($_POST['homeAddress'])) {
  
  include 'data_HRD.php';

$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];

$birthday = $_POST['birthday'];
$birthplace = $_POST['birthplace'];
$gender = $_POST['gender'];

$contact = $_POST['contact'];
$email = $_POST['email'];
$socialMedia = $_POST['socialMedia'];

$civilStatus = $_POST['civilStatus'];
$educBackground = $_POST['educBackground'];
$educAttainment = $_POST['educAttainment'];

$language = $_POST['language'];
$religion = $_POST['religion'];
$jobExperience = $_POST['jobExperience'];
$homeAddress = $_POST['homeAddress'];

  echo "<p><strong>Surname: </strong> " . $surname . "<p>";
  echo "<p><strong>Firstname:</strong> " . $firstname . "<p>";
  echo "<p><strong>Middlename:</strong> " . $middlename . "<p>";
  
  echo "<p><strong>Birthday: </strong> " . $birthday . "<p>";
  echo "<p><strong>Birthplace:</strong> " . $birthplace . "<p>";
  echo "<p><strong>Gender:</strong> " . $gender . "<p>";
  
  echo "<p><strong>Contact #: </strong> " . $contact . "<p>";
  echo "<p><strong>Email:</strong> " . $email . "<p>";
  echo "<p><strong>Social Media:</strong> " . $socialMedia . "<p>";
  
  echo "<p><strong>Civil Status: </strong> " . $civilStatus . "<p>";
  echo "<p><strong>Educational Background:</strong> " . $educBackground . "<p>";
  echo "<p><strong>Educational Attainment:</strong> " . $educAttainment . "<p>";
  
  echo "<p><strong>Language: </strong> " . $language . "<p>";
  echo "<p><strong>Religion:</strong> " . $religion . "<p>";
  echo "<p><strong>Job Experience:</strong> " . $jobExperience . "<p>";
  echo "<p><strong>Home Address:</strong> " . $homeAddress . "<p>";

} else {
  echo "<p>No form data submitted.</p>";
}

?>

  <a href="form_HRD.html" class="btn">Go Back</a>
  <a href="view_HRD.php" class="btn">View Entries</a>
  
</div>
</body>
</html>