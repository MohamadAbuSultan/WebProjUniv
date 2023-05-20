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

$imagePath = 'C:\xampp\htdocs\php_program\Web\PHP_Project\Images\personal.png';  // Replace with the actual path to your image file

$imageData = addslashes(file_get_contents($imagePath));

$FullName = '';
$gender = '';
$BirthDate = '';
$nationality = '';
$place_of_birth = '';
$job = '';
$experience = '';
$dataInserted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FullName = $_POST['FullName'];
    $gender = $_POST['gender'];
    $BirthDate = $_POST['BirthDate'];
    $nationality = $_POST['nationality'];
    $place_of_birth = $_POST['place_of_birth'];
    $job = $_POST['job'];
    $experience = $_POST['experience'];

    $sql = "INSERT INTO personalinformation (FullName, Gender, BirthDate, Nationality, PlaceOfDate, JobTitle, YearOfExperience, ImageData)
        VALUES ('$FullName', '$gender', '$BirthDate', '$nationality', '$place_of_birth', '$job', '$experience', '$imageData')";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        $dataInserted = true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM personalinformation ORDER BY id DESC LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $fullName = $row["FullName"];
    $gender = $row["Gender"];
    $birthDate = $row["BirthDate"];
    $nationality = $row["Nationality"];
    $placeOfBirth = $row["PlaceOfDate"];
    $jobTitle = $row["JobTitle"];
    $experience = $row["YearOfExperience"];
} else {
    $fullName = "No data found.";
    $gender = "";
    $birthDate = "";
    $nationality = "";
    $placeOfBirth = "";
    $jobTitle = "";
    $experience = "";
}
?>

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
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/unispace"/>
    <link rel="stylesheet" href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold"/>
          

    <style>
        label {
            display: inline-block;
            width: 150px;
            text-align: right;
            padding-right: 50px;
        }

        input {
            display: inline-block;
            border: none;
        }

        #image {
            position: absolute;
            right: 300px;
            width: 300px;
            height: 300px;
        }
    </style>

</head>

<body>
    <header>
        <div class="inner">
            <nav>
                <li><span><a href="PersonalInformation.php" style="color: white;">Personal Information</a></span></li>
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

    <div class="PersonalInformation">
        <h1 style="margin-left: 50px; margin-bottom: 20px;">Personal Information</h1>
        <form class="Info" method="post">
            <img id="image" name="image" src="../Images/personal.png" alt="Personal">

            <div class="test">

            <label for="FullName">Full Name:</label>
            <input type="text" id="FullName" name="FullName" placeholder="Mohamad Khaled" value="<?php echo $FullName; ?>"><br><br>

            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" placeholder="Male" value="<?php echo $gender; ?>"><br><br>

            <label for="datemax">Birth Date:</label>
            <input type="date" id="datemax" name="BirthDate" max="2025-12-31" value="<?php echo $BirthDate; ?>"><br><br>

            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality" placeholder="palestinian" value="<?php echo $nationality; ?>"><br><br>

            <label for="place_of_birth">Place Of Date:</label>
            <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Gaza" value="<?php echo $place_of_birth; ?>"><br><br>

            <label for="job">Job Title:</label>
            <input type="text" id="job" name="job" placeholder="Software Engineer" value="<?php echo $job; ?>"><br>

            <label for="experience"><p>Year of experience:</p></label>
            <input type="text" id="experience" name="experience" placeholder="3 years" value="<?php echo $experience; ?>"><br><br>

            <button type="submit" name="submit">Sign in</button>

            </div>

        </form>
    </div>

    <div id="footer">
        <p>&copy; My Website 2023. mohamadkhaled All rights reserved</p>
    </div>
</body>

</html>



<!-- // echo "Full Name: " . $fullName . "<br>";
// echo "Gender: " . $gender . "<br>";
// echo "Birth Date: " . $birthDate . "<br>";
// echo "Nationality: " . $nationality . "<br>";
// echo "Place of Birth: " . $placeOfBirth . "<br>";
// echo "Job: " . $jobTitle . "<br>";
// echo "Experience: " . $experience . "<br>"; -->


<!-- 
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
    } -->