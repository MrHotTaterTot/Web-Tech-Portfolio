<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$db = "databses";
$database = mysqli_connect($hostname, $username, $password, $db);
$error = "";

if(isset($_SESSION["loggedin"]) && ($_SESSION["loggedin"] === true)){
    header("location: /addPost.php");
    exit;
}
if(isset($_POST["login_user"])){
    $username = mysqli_real_escape_string($database, $_POST["email"]);
    $password = mysqli_real_escape_string($database, $_POST["password"]);

    if(empty($username) | empty($password)){
        $error = "Username and password required";
    }
    else{
        $query = "SELECT * FROM users WHERE Email = '$username' AND password = '$password'";
        $result = mysqli_query($database, $query);
        if(mysqli_num_rows($result) == 1){
            session_start();
            $_SESSION["loggedin"] = true;
            header("Location: /addPost.php");
            mysqli_close($result);
        } else{
            $error = "Email/Password are incorrect";
        }
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf - 8">
        <title>Portfolio Login</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/portfolio.css">
        <meta name="viewport" content="width=device-width">
    </head>
<body id="all">

    <form method="post" action="/login.php" id="login">
        <?php
        if(!empty($error))
            echo "<p id='error'>$error</p>";
        ?>
        <label for="email">Enter your email:<br></label>
        <input type="text" id="email" name="email">
        <br><br>
        <label for="password" >Enter your password:<br></label>
        <input type="password" minlength="8" id="password" name="password"><br><br>
        <input type="submit" value="Login" id="submit" name="login_user">
    </form>
</body>
