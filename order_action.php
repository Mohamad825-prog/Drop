
<?php
session_start();
include 'connection.php';

$name = $_POST['text'];
$people = $_POST['people'];
$date = $_POST['date'];
$special = $_POST['special'];

$sql = "INSERT INTO orders (name, people, `date`, `special`)
        VALUES ('$name', '$people', '$date', '$special')";

mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));

header("Location: index.php");
?>
