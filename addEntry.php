<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$db = "databses";
$database = mysqli_connect($hostname, $username, $password, $db);
$Title = mysqli_real_escape_string($database,$_POST["Title"]);
$Entry = mysqli_real_escape_string($database, $_POST["Entry"]);
$Date = date("d/m/Y");


$query = "INSERT INTO posts (Date, Title,Entry) VALUES ('$Date', '$Title', '$Entry')";
$result = mysqli_query($database, $query);
header("location: /Blog.php");


