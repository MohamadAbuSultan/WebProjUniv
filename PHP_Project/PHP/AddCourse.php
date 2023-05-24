
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="stylesheet" href="../CSS/Index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
   <?php require 'Index.php'?>

    <div class="body">
        <h1 style="margin-left: 50px;">Add Course</h1>
        <form action="CoursesInformation.php" class="Courses" method="post" enctype="multipart/form-data">
            <img id="image" name="image" src="../Images/Exp.jpeg" alt="Google logo">

            <div class="test">
                <label for="CourseName">Course Name:</label>
                <input type="text" name="CourseName" id="CourseName" required><br><br>

                <label for="Hours">Total Hours:</label>
                <input type="text" name="Hours" id="Hours" required><br><br>

                <label for="StartDate">Start Date:</label>
                <input type="date" name="StartDate" id="StartDate" required><br><br>

                <label for="EndDate">End Date:</label>
                <input type="date" name="EndDate" id="EndDate" required><br><br>

                <label for="Institution">Institution:</label>
                <input type="text" name="Institution" id="Institution" required><br><br>

                <label for="Notes">Notes:</label>
                <input type="text" name="Notes" id="Notes" required><br><br>

                <label for="ImageURL">Image URL:</label>
                <input type="url" name="ImageURL" id="ImageURL" required><br><br>

                <label for="File">File:</label>
                <input type="file" name="Image" id="Image" accept="image/jpeg, image/png, image/gif" required><br><br>

                <input type="submit" value="Add Course">
            </div>
        </form>
        
    </div>
   
    <div id="footer">
        <p>&copy; My Website 2023. mohamadkhaled All rights reserved</p>
    </div>
</body>
</html>