<?php
    setcookie('name', $_POST['name'], time() - 3600);
    setcookie('email', $_POST['email'], time() - 3600);
    header("Location: cookie.php");
?>