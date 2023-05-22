<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image View</title>
    <link rel="stylesheet" href="../CSS/Index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
   <?php require 'Index.php'?>

    <div class="container">

        <?php
        $storageFolderPath = "../Images/personal.png";

        // Retrieve and display Images on the view page
        $files = glob($storageFolderPath . "*");

        if (empty($files)) {
            echo "No images found.";
        } else {
            foreach ($files as $file) {
                // Retrieve and display the course information
                session_start();
                $courseName = $_SESSION["CourseName"];
                $hours = $_SESSION["Hours"];
                $startDate = $_SESSION["StartDate"];
                $endDate = $_SESSION["EndDate"];
                $institution = $_SESSION["Institution"];
                
                echo "<div class='course-info'>";
                echo "<h1>Course Name: \"$courseName\"</h1>";
                echo "from: $startDate";
                echo " to: $endDate";
                echo ", Totaly : $hours Hours";
                echo "<p>institution : $institution</p>";
                echo "</div>";

                // Get the file name
                $fileName = basename($file);

                // Display the Image using the file path
                echo "<div class='image-container'>";
                echo "<img src='$file' width='40%' height = '40%' alt='$fileName'>";
                echo "</div>";
                
                
            }
        }
        ?>
    </div>
</body>
</html>