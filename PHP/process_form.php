<?php
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
        if($_GET["name"] == "" || $_GET["email"] == "" || $_GET["comment"] == ""|| $_GET["gender"] == ""|| $_GET["website"] == "")
        {
            echo "empty";
        }
        else{
            echo "name : ".$name = $_GET["name"];
            echo "<br/>email : ".$email = $_GET["email"];
            echo "<br/>website : ".$website = $_GET["website"];
            echo "<br/>comment : ".$comment = $_GET["comment"];
            echo "<br/>gender : ".$gender = $_GET["gender"];          
        }
    }
?>