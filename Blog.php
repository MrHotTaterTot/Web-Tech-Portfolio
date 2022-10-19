<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "databses";
$database = mysqli_connect($hostname, $username, $password, $db);
$query = mysqli_query($database,"SELECT * FROM posts ORDER BY ID desc ");
$data = [];
while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf - 8">
        <title>My Blog</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/portfolio.css">
        <meta name="viewport" content="width=device-width">
    </head>
    <body id="whole_blog">
        <header id="Blog_Header">
            <h3>Michal's Blog</h3>
        </header>
        <article id="blog">
             <section id="addPost">
                <button type="button" name="addPost"><a href="addPost.php">Add Post</a></button>
            </section>
            <div id="line"></div>
            <article id="Blog_entries">
                <table id="Posts">
                    <?php
                    foreach($data as $entry){
                        echo
                        "<div class = 'entry'>
 <tr class='date'>      <td>Date:$entry[Date]</td>      </tr>
 <tr class='title'>     <td>$entry[Title]</td>          </tr>
 <tr class='text'>      <td>$entry[Entry]<br><hr></td>  </tr>";
                    }
                    ?>
                </table>
            </article>
        </article>
        <footer id="Contact">
            <hgroup>
                <h4>Contact:</h4>
                <h5>Telephone:<a href="">+44 07392-625299</a></h5>
                <h5>Email: <a>staszewski.michal.main@gmail.com</a></h5>
                <h5>Social media can be found on the  <a href="Main.html">main page</a></h5>
            </hgroup>
            <p><i>Copyright &copy; 2022 Michał Staszewski</i></p>
        </footer>
    </body>
</html>