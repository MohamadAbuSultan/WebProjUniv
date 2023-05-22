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
    <title>Experiences Information</title>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/unispace"/>
    <link rel="stylesheet" href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold"/>
         
</head>
<body>
    <!-- <header>
        <div class="inner">
            <nav>
                <li><span><a href="PersonalInformation.php">Personal Information</a></span></li>
                <li><span><a href="CoursesInformation.php">Courses Information</a></span></li>
                <li><span><a href="ExperiencesInformation.php" style="color: white;">Experiences Information</a></span></li>
                <li><span><a href="AddCourse.php">Add Course</a></span></li>
                <li><span><a href="AddExperiences.php">Add Experiences</a></span></li>
            </nav>

            <div class="logo">
                <div>
                    <img src="../Images/Azhar_blue_LOGO.png" alt="Azhar_blue_LOGO">
                </div>
            </div>
        </div>
    </header> -->
    <?php require 'index.php';?>

    <div>

    <h1>Experiences Information</h1>

    <div class="mydiv">
      <div class="p1">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Error connecting to MySQL: " . $conn->connect_error);
        }

        $query = "SELECT * FROM experiencesinformation LIMIT 5";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $experienceCategory = $row['ExperienceCategory'];
                $experienceTitle = $row['ExperienceTitle'];
                $startMonth = $row['StartMonth'];
                $endMonth = $row['EndMonth'];
                $institution = $row['Institution'];
                $description = $row['Description'];

                echo "<h3>$experienceTitle <sub>$experienceCategory</sub></h3>";
                echo "<b>from $startMonth to $endMonth</b>";
                echo "<p>$description</p>";
                echo "<br><br>";
            }
        } else {
            echo "No experiences found.";
        }

        mysqli_close($conn);
        ?>
      </div>    
   </div> 
   <br><br>
   <div id="footer">
        <p>&copy; My Website 2023. mohamadkhaled All rights reserved</p>
    </div>
</div>

</body>
</html>