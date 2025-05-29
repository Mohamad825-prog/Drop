
<?php
session_start();
include 'connection.php';

$name = $_POST['text'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact (name, email, message) 
        VALUES ('$name', '$email', '$message')";

mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));

header("Location: index.php");

?>