<!-- 
    لإضافة صورة
    في ال ImagePath بنكتب
    ../Images/إسم الصورة

    في الImageName بنكتب
    إسم الصورة
    personal.png

    مثال :- 
    INSERT INTO `coursesinformation`
     (`id`, `CourseName`, `Hours`, `StartDate`, `EndDate`, `Institution`, `ImagePath`, `Notes`, `ImageName`)
    VALUES (NULL, 'web', '90', '2023-05-03', '2023-05-23', 'gggggggg', '../Images/personal.png', 'helloooooooooooooo', 'personal.png\r\n');
 -->
 
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

// Retrieve course information from the database
$query = "SELECT * FROM coursesinformation";
$result = mysqli_query($conn, $query);


// Retrieve the count of existing insertions
$query2 = "SELECT COUNT(*) as total FROM coursesinformation";
$result2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_assoc($result2);
$count = $row['total'];

$limit = 3; // Set the desired limit

if ($count >= $limit) {
    // Delete all previous insertions
    $deleteQuery = "DELETE FROM coursesinformation";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if (!$deleteResult) {
        die("Error deleting previous insertions: " . mysqli_error($conn));
    }
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
    <title>Courses Information</title>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/unispace"/>
    <link rel="stylesheet" href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold"/>
       
    <style>
        th,
        td {
            border-collapse: collapse;
            border-left: 1px solid black;
        }

        th {
            background-color: rgb(147, 69, 82);
        }

        table.course{
            border: solid black;
            margin: 10px;
            border-radius: 10px;
        }
    </style>
</head>


<body>
<header>
        <div class="inner">
            <nav>
                <li><span><a href="PersonalInformation.php">Personal Information</a></span></li>
                <li><span><a href="CoursesInformation.php" style="color: white;">Courses Information</a></span></li>
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
    <h1>Courses Information</h1>

    <table border="1"cellpadding="5 "cellspacing="0" width="94%" style="margin-left: 20px;">
        <tr bgcolor="606060">
            <th rowspan="2" class="left" width="2%" >#</th>  
            <th rowspan="2" width="12%" >Course Name</th>
            <th rowspan="2"width="8%" >Total Hours</th>
            <th colspan="2" width="12%" >Date</th>
            <th rowspan="2"width="12%" >Institution</th>
            <th rowspan="2" width="10%" >Attachment</th>
            <th rowspan="2" colspan="2" class="right" width="12%">Notes</th> 
        </tr>
        
        <tr align="middle" bgcolor="606060" >
           <th>From</th> 
            <th>To</th>   
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr height="80px" bgcolor="#E5E5E5">
                <td align="center"><b><?php echo $row["id"]; ?>"</b></td>
                <td align="center"><?php echo $row["CourseName"]; ?></td>
                <td class="margin"><?php echo $row["Hours"]; ?></td>
                <td align="center"><?php echo $row["StartDate"]; ?></td>
                <td align="center"><?php echo $row["EndDate"]; ?></td>
                <td align="center"><?php echo $row["Institution"]; ?></td>
                <td align="center"><a href="ImageView.php?id=<?php echo $row["id"]; ?>">View</a></td>
                <td align ="left" colspan="2"><?php echo $row["Notes"]; ?></td>
            </tr>
        <?php } ?>
    </table>

     <div id="footer">
        <p>&copy; My Website 2023. mohamadkhaled All rights reserved</p>
    </div>
</body>

</html>
