<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get-Post-form</title>
</head>
<body>

<form action="get-post.php" method="get">
    <label>Enter First Name :</label><br>
    <input type="text" name="firstname"><br>

    <label>Enter Last Name :</label><br>
    <input type="text" name="lastname"><br>

    <label>Enter Username :</label><br>
    <input type="text" name="username"><br>

    <label>Enter Email :</label><br>
    <input type="email" name="email"><br>

    <label>Enter Password :</label><br>
    <input type="password" name="password"><br>

    <label>Enter Confirm Password :</label><br>
    <input type="password" name="confirm-password"><br><br>

    <input type="submit" value="Log in"><br>
</form>

</body>
</html>
<?php 

    echo "{$_GET["firstname"]} <br>";
    echo "{$_GET["lastname"]} <br>";
    echo "{$_GET["username"]} <br>";
    echo "{$_GET["email"]} <br>";
    echo "{$_GET["password"]} <br>";
    echo "{$_GET["confirm-password"]} <br>";
 

?>
