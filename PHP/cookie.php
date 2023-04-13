
<form action="home.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"    /> <br/><br/>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"  /> <br/><br/>

        <input type="submit" value="send" />
</form>

<?php


// header("Location: home.php");
// header("Location: home.php")

// setcookie(name,value,expire,path,domain,secure);
// setcookie('username', 'mohamad', time() + 3600, '\', 'exmaple.com',true);

// if(!isset($_COOKIE['username']))
// {
//     echo "Cookie named'" . 'username' . "' is not set";
// }

?>
