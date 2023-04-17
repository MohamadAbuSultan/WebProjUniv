<?php

  $dsn = 'mysql:host=localhost;dbname=products'; // Data Source Name

  $user = 'root'; // The User To Connect

  $pass = ''; // Password for This User

  $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  );

  try {

    $db = new PDO($dsn, $user, $pass, $options); // Start A New Connection With PDO Class
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q = "INSERT INTO items (name) VALUES ('منتج2')";

    $db->exec($q);

    echo 'You are connected';

  }

  catch(PDOException $e) {

    echo 'Failed' . $e->getMessage();

  }