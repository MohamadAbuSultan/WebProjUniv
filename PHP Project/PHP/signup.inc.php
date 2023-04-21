<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$FullName = $_POST['FullName'];
$gender = $_POST['gender'];
$BirthDate = $_POST['BirthDate'];
$nationality = $_POST['nationality'];
$place_of_birth = $_POST['place_of_birth'];
$job = $_POST['job'];
$experience = $_POST['experience'];
$image = $_FILES['image']['tmp_name'];

$sql = "INSERT INTO personalinformation (FullName, Gender, BirthDate, Nationality, PlaceOfDate, JobTitle, YearOfExperience, image_dir)
            VALUES ('$FullName', '$gender', '$BirthDate' , '$nationality', '$place_of_birth', '$job', '$experience', '$img');";
mysqli_query($conn, $sql);

header("Location: ../html/PersonalInformation.html");