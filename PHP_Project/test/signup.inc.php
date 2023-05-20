

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was success
if ($conn->connect_error) {
    die("Error connecting to MySQL: " . $conn->connect_error);
}

$FullName = '';
$gender = '';
$BirthDate = '';
$nationality = '';
$place_of_birth = '';
$job = '';
$experience = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$FullName = $_POST['FullName'];
$gender = $_POST['gender'];
$BirthDate = $_POST['BirthDate'];
$nationality = $_POST['nationality'];
$place_of_birth = $_POST['place_of_birth'];
$job = $_POST['job'];
$experience = $_POST['experience'];
}
$sql = "INSERT INTO personalinformation (FullName, Gender, BirthDate, Nationality, PlaceOfDate, JobTitle, YearOfExperience )
            VALUES ('$FullName', '$gender', '$BirthDate' , '$nationality', '$place_of_birth', '$job', '$experience')";
mysqli_query($conn, $sql); 

  // Check if the user has entered a name
if (empty($_POST['FullName'])) {
    echo "Please enter your name.";
    exit;
  }
  
  // Check if the user has entered a gender
  if (empty($_POST['gender'])) {
    echo "Please select a gender.";
    exit;
  }
  
  // Check if the user has entered a birth date
  if (empty($_POST['BirthDate'])) {
    echo "Please enter your birth date.";
    exit;
  }
  
  // Check if the user has entered a nationality
  if (empty($_POST['nationality'])) {
    echo "Please enter your nationality.";
    exit;
  }
  
  // Check if the user has entered a place of birth
  if (empty($_POST['place_of_birth'])) {
    echo "Please enter your place of birth.";
    exit;
  }
  
  // Check if the user has entered a job title
  if (empty($_POST['job'])) {
    echo "Please enter your job title.";
    exit;
  }
  
  // Check if the user has entered a year of experience
  if (empty($_POST['experience'])) {
    echo "Please enter your year of experience.";
    exit;
  }
  
  // header("Location: ../html/PersonalInformation.html");
  
//   // Check if the user has uploaded an image file
//   if (!isset($_FILES["image"]) || !is_uploaded_file($_FILES["image"]["tmp_name"])) {
//     echo "Error: No image file was uploaded.";
//     exit;
//   }

// // Check if the user has uploaded an image file
// if (!isset($_FILES["image"]) || !is_uploaded_file($_FILES["image"]["tmp_name"])) {
//   echo "Error: No image file was uploaded.";
//   exit;
// }

// // Check if the image file was uploaded successfully
// // $destination = "/var/www/html/images/" . $_FILES["image"]["name"];
// if (!move_uploaded_file($_FILES["image"]["tmp_name"], $destination)) {
//   echo "Error: The image file could not be uploaded.";
//   exit;
// }

