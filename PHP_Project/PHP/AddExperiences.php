<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error connecting to MySQL: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ExperienceCategory = $_POST["experienceCategory"];
    $ExperienceTitle = $_POST["experienceTitle"];
    $StartMonthMonth = $_POST["startMonthMonth"];
    $StartMonthYear = $_POST["startMonthYear"];
    $EndMonthMonth = $_POST["endMonthMonth"];
    $EndMonthYear = $_POST["endMonthYear"];
    $Institution = $_POST["institution"];
    $Description = $_POST["description"];

    // Concatenate month and year values into a single string
    $StartMonth = $StartMonthYear . '-' . $StartMonthMonth;
    $EndMonth = $EndMonthYear . '-' . $EndMonthMonth;

    $query = "INSERT INTO experiencesinformation (ExperienceCategory, ExperienceTitle, StartMonth, EndMonth, Institution, Description)
     VALUES ('$ExperienceCategory', '$ExperienceTitle', '$StartMonth', '$EndMonth', '$Institution', '$Description')";

    if (mysqli_query($conn, $query)) {
        header("Location: ExperiencesInformation.php"); // Redirect to the ExperiencesInformation.php page
        exit();
    } else {
        echo "Error inserting experience: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
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
    <title>Add Experiences</title>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/unispace"/>
    <link rel="stylesheet" href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold"/>
         
</head>
<body>
    <!-- <header>
        <div class="inner">
            <nav>
                <li><span><a href="PersonalInformation.php">Personal Information</a></span></li>
                <li><span><a href="CoursesInformation.php">Courses Information</a></span></li>
                <li><span><a href="ExperiencesInformation.php">Experiences Information</a></span></li>
                <li><span><a href="AddCourse.php">Add Course</a></span></li>
                <li><span><a href="AddExperiences.php" style="color: white;">Add Experiences</a></span></li>
            </nav>

            <div class="logo">
                <div>
                    <img src="../Images/Azhar_blue_LOGO.png" alt="Azhar_blue_LOGO">
                </div>
            </div>
        </div>
    </header> -->
    <?php require 'index.php';?>

    <h1>Add Experiences</h1>
    <img id="image" name="image" src="../Images/Exp.jpeg" alt="Google logo">

  
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="clear">
            <div class="col1">
                <p> <label> Experience Category: </label> </p>
            </div>
            <div class="col1">
                <input type="text" name="experienceCategory" required>
            </div>
        </div>
        <div class="clear">
            <div class="col1">
                <p> <label> Experience Title: </label> </p>
            </div>
            <div class="col1">
                <input type="text" name="experienceTitle" required>
            </div>
        </div>
        <div class="clear">
            <div class="col1">
                <p> <label> Start Month: </label> </p>
            </div>
            <div id="date1" class="col1 expdate">
                <select class="date" name="startMonthMonth">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                    <!-- Add more month options as needed -->
                </select>
                <select class="date" name="startMonthYear">
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                    <!-- Add more year options as needed -->
                </select>
            </div>
        </div>
        <div class="clear">
            <div class="col1">
                <p><label> End Month: </label></p>
            </div>
            <div class="col1 expdate ">
                <select class="date" name="endMonthMonth">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select class="date" name="endMonthYear">
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                    <!-- Add more year options as needed -->
                </select>
            </div>
        </div>
        <div class="clear">
            <div class="col1">
                <p> <label> Institution: </label> </p>
            </div>
            <div class="col1">
                <input type="text" name="institution" required>
            </div>
        </div>
        <div class="clear">
            <div class="col1">
                <p> <label> Description: </label> </p>
            </div>
            <div class="col1">
                <textarea name="description" required></textarea>
            </div>
        </div>

        <div class="clear">
            <input type="submit" value="Save">
        </div>
    </form>

    <br><br>
    <div id="footer">
        <p>&copy; My Website 2023. mohamadkhaled All rights reserved</p>
    </div>
</body>
</html>