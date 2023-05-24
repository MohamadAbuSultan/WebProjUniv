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
    <?php require 'Index.php'; ?>

    <div class="container">
        <?php
        session_start();

        // Retrieve the course ID from the URL
        if (isset($_GET["id"])) {
            $courseID = $_GET["id"];
        } else {
            echo "Invalid course ID.";
            exit;
        }

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check if the connection was successful
        if (!$conn) {
            die("Error connecting to MySQL: " . mysqli_connect_error());
        }

        // Retrieve the course information based on the course ID
        $query = "SELECT * FROM coursesinformation WHERE id = $courseID";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Retrieve and display the course information
            $courseName = $row["CourseName"];
            $hours = $row["Hours"];
            $startDate = $row["StartDate"];
            $endDate = $row["EndDate"];
            $institution = $row["Institution"];
            $imageURL = $row["url"];
            $imageFile = $row["file"];
            $notes = $row["Notes"];

            echo "<div class='course-info'>";
            echo "<h1>Course Name: \"$courseName\"</h1>";
            echo "From: $startDate";
            echo " To: $endDate";
            echo ", Total Hours: $hours";
            echo "<p>Institution: $institution</p>";
            echo "<p>Notes: $notes</p>";
            echo "</div>";

            if (!empty($imageURL)) {
                // Display the Image using the URL
                echo "<div class='image-container'>";
                echo "<img src='$imageURL' width='40%' height='40%' alt='$imageFile'>";
                echo "</div>";
            } else {
                // Display the Image using the file path
                $imagePath = "$imageFile";
                echo "<div class='image-container'>";
                echo "<img src='$imagePath' width='40%' height='40%' alt='$imageFile'>";
                echo "</div>";
            }
        } else {
            echo "No course found with the given ID.";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>