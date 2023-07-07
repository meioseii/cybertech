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

// Retrieve form data
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

// Prepare the INSERT statement
$sql = "INSERT INTO human_resource (surname, firstname, middlename, birthday, birthplace, gender, contact, email, socialMedia, civilStatus, educBackground, educAttainment, language, religion, jobExperience, homeAddress) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt -> bind_param ("ssssssssssssssss", $surname, $firstname, $middlename, $birthday, $birthplace, $gender, $contact, $email, $socialMedia, $civilStatus, $educBackground, $educAttainment, $language, $religion, $jobExperience, $homeAddress);

// Execute the statement
if ($stmt->execute()) {
  echo "Form data saved successfully.";
}
else {
  echo "Error: ". $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();

?>