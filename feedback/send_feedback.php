<?php
session_start();
global $connection;
require_once('../db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($name) || empty($email) || empty($message)) {
    echo 'Please fill in all the required fields!';
} else {
    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($connection -> query($sql) === true) {
        $_SESSION['success'] = 'Thanks for your feedback!';
        header('location: feedback.php?success=1');
    } else {
        echo "Error: " . $connection->error;
    }
}
