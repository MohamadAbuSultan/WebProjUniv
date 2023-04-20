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

$sql = "INSERT INTO personalinformation (FullName, Gender, BirthDate, Nationality, PlaceOfDate, JobTitle, YearOfExperience)
            VALUES ('$FullName', '$gender', '$BirthDate' , '$nationality', '$place_of_birth', '$job', '$experience');";
mysqli_query($conn, $sql);

header("Location: ../html/PersonalInformation.html");