<?php

  $dsn = 'mysql:host=localhost;dbname=products'; // Data Source Name

  $user = 'root'; // The User To Connect

  $pass = ''; // Password for This User

  try {

    $db = new PDO($dsn, $user, $pass); // Start A New Connection With PDO Class

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }

  catch(PDOException $e) {

    echo 'Failed' . $e->getMessage();

  }