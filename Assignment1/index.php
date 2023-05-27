<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            font-weight: bold;
        }

        header nav li {
            display: table;
            height: 100%;
            float: left;
            margin: 20px 50px;
        }

        header nav a:hover {
            color: blue;
        }

        nav a {
            color: black;
        }    
    </style>
</head>

<body>

    <header>
        <div>
            <nav>
                <li><span><a href="PersonalInformation.php">Personal Information</a></span></li>
                <li><span><a href="CoursesInformation.php">Courses Information</a></span></li>
                <li><span><a href="ExperiencesInformation.php">Experiences Information</a></span></li>
                <li><span><a href="AddCourse.php">Add Course</a></span></li>
                <li><span><a href="AddExperiences.php">Add Experiences</a></span></li>
            </nav>
        </div>
    </header>

</body>
</html>