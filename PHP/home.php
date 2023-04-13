<?php
   setcookie('name', $_POST['name'], time() + 3600);
   setcookie('email', $_POST['email'], time() + 3600);
    
    echo $_POST['name'] . " " . $_POST['email'];
    
?>

<form action="logout.php" method="POST">
    <input type="submit" value="logout" />
</form>

