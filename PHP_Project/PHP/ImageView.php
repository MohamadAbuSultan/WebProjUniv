<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/Index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/unispace"/>
    <link rel="stylesheet" href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold"/>
          
</head>
<body>
    <header>
        <div class="inner">
            <nav>
                <li><span><a href="PersonalInformation.php">Personal Information</a></span></li>
                <li><span><a href="CoursesInformation.php">Courses Information</a></span></li>
                <li><span><a href="ExperiencesInformation.php">Experiences Information</a></span></li>
                <li><span><a href="AddCourse.php">Add Course</a></span></li>
                <li><span><a href="AddExperiences.php">Add Experiences</a></span></li>
            </nav>

            <div class="logo">
                <div>
                    <img src="../Images/Azhar_blue_LOGO.png" alt="Azhar_blue_LOGO">
                </div>
            </div>
        </div>
    </header>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Error connecting to MySQL: " . $conn->connect_error);
}
// Form submission to insert Image
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ImageFile = $_FILES["Image"]["tmp_name"];  // Retrieve the uploaded Image file
    $ImageName = $_FILES["Image"]["name"];  // Get the original name of the Image file

    // Move the uploaded Image to a desired location on the server
    $destination = "path/to/Image/folder/" . $ImageName;
    move_uploaded_file($ImageFile, $destination);

    // Insert the Image information into the database
    $query = "INSERT INTO coursesinformation (ImageName, ImagePath) VALUES ('$ImageName', '$destination')";
    mysqli_query($conn, $query);
}

// Retrieve and display Images on the view page
$query = "SELECT ImageName,ImagePath FROM coursesinformation";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $ImageName = $row["ImageName"];
    $ImagePath = $row["ImagePath"];

    // Display the Image using the file path
    echo "<img src='$ImagePath' alt='$ImageName'>";
}
?>