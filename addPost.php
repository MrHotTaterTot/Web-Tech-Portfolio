<?php
session_start();
if(($_SESSION["loggedin"] !== true)){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf - 8">
        <title>My Blog</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/portfolio.css">
        <meta name="viewport" content="width=device-width">
        <script src = Javascript/BlogEntry.js defer></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    </head>
    <body id="addPost">
        <form id="addingPost" action="addEntry.php" method="post" onsubmit="return check(submit)"<?php echo htmlspecialchars("PHP_SELF") ?>>
            <p id="title">Blog Post</p>
            <p id="Errors"></p>
            <div id="All">
                <label for="Title">Blog entry Title:<br></label>
                <input type="text" id="Title" name="Title"><br>
                <label for="Entry">Blog post entry:<br></label>
                <textarea name="Entry" id="Entry" cols="50" rows="15"></textarea>
                <br>
                <input type="submit" id="submit" class="button" value="Submit">
                <button type="button" id="reset" onclick="clear()">Clear</button>
                <button type="button" id="logout" class="button"><a href="logout.php">Log out</a></button>
            </div>
        </form>
    </body>
</html>
